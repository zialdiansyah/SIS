<script type="text/javascript">
jQuery(document).ready(function($) {
      $('a[rel*=datetimepicker]').datetimepicker({
        calImage : '../images/cal.gif',
        closeImage   : '../images/cal_close.gif'
      })
    })
/*******************
  UTILITY FUNCTIONS
********************/
// day of week of month's first day
function getFirstDay(theYear, theMonth){
    var firstDate = new Date(theYear,theMonth,1);
    return firstDate.getDay();
}
// number of days in the month
function getMonthLen(theYear, theMonth) {
    var nextMonth = new Date(theYear, theMonth + 1, 1);
    nextMonth.setHours(nextMonth.getHours() - 3);
    return nextMonth.getDate();
}

function getElementPosition(elemID) {
	var offsetTrail = document.getElementById(elemID);
    var offsetLeft = 0;
    var offsetTop = 0;
    while (offsetTrail) {
        offsetLeft += offsetTrail.offsetLeft;
        offsetTop += offsetTrail.offsetTop;
        offsetTrail = offsetTrail.offsetParent;
    }
    if (navigator.userAgent.indexOf("Mac") != -1 && 
        typeof document.body.leftMargin != "undefined") {
        offsetLeft += document.body.leftMargin;
        offsetTop += document.body.topMargin;
    }
    return {left:offsetLeft, top:offsetTop};
}

// position and show calendar
function showCalendar(evt) {
    evt = (evt) ? evt : event;
    if (evt) {
    	if (document.getElementById("calendar").style.visibility != "visible") {
    	    var elem = (evt.target) ? evt.target : evt.srcElement;
    	    var position = getElementPosition(elem.id);
            shiftTo("calendar", position.left + elem.offsetWidth, position.top);
            show("calendar");
        } else {
            hide("calendar");
        }
    }
}

/************************
  DRAW CALENDAR CONTENTS
*************************/
// clear and re-populate table based on form's selections
function populateTable(form) {
    // pick up date form choices
    var theMonth = form.chooseMonth.selectedIndex;
    var theYear = parseInt(form.chooseYear.options[form.chooseYear.selectedIndex].text);
    // initialize date-dependent variables
    var firstDay = getFirstDay(theYear, theMonth);
    var howMany = getMonthLen(theYear, theMonth);
    var today = new Date();
    
    // fill in month/year in table header
    document.getElementById("tableHeader").innerHTML = 
        form.chooseMonth.options[theMonth].text + " " + theYear;
    
    // initialize vars for table creation
    var dayCounter = 1;
    var TBody = document.getElementById("tableBody");
    // clear any existing rows
    while (TBody.rows.length > 0) {
        TBody.deleteRow(0);
    }
    var newR, newC, dateNum;
    var done=false;
    while (!done) {
        // create new row at end
        newR = TBody.insertRow(TBody.rows.length);
        if (newR) {
            for (var i = 0; i < 7; i++) {
                // create new cell at end of row
                newC = newR.insertCell(newR.cells.length);
                if (TBody.rows.length == 1 && i < firstDay) {
                    // empty boxes before first day
                    newC.innerHTML = "&nbsp;";
                    continue;
                }
                if (dayCounter == howMany) {
                    // no more rows after this one
                    done = true;
                }
                // plug in link/date (or empty for boxes after last day)
                if (dayCounter <= howMany) {
                    if (today.getFullYear() == theYear &&
                        today.getMonth() == form.chooseMonth.selectedIndex &&
                        today.getDate() == dayCounter) {
                        newC.id = "today";
                    }
                    newC.innerHTML = "<a href='#'onclick='chooseDate(" +
                        dayCounter + "," + theMonth + "," + theYear + 
                        "); return false;'>" + dayCounter + "</a>";
                     dayCounter++;
               } else {
                    newC.innerHTML = "&nbsp;";
                }
            }
        } else {
            done = true;
        }
    }
}

/*******************
  INITIALIZATIONS
********************/
// create dynamic list of year choices
function fillYears() {
    var today = new Date();
    var thisYear = today.getFullYear();
    var yearChooser = document.dateChooser.chooseYear;
    for (i = thisYear; i < thisYear + 5; i++) {
        yearChooser.options[yearChooser.options.length] = new Option(i, i);
    }
    setCurrMonth(today);
}
// set month choice to current month
function setCurrMonth(today) {
    document.dateChooser.chooseMonth.selectedIndex = today.getMonth();
}

/*******************
   PROCESS CHOICE
********************/
function chooseDate(date, month, year) {
    document.mainForm.date.value = date;
    document.mainForm.month.value = month + 1;
    document.mainForm.year.value = year;
    hide("calendar");
}

</script>