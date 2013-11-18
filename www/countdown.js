// countdown('{clickurl}http://images.eurogamer.net/2011/takeovers/sw_counti.png', 'http://www.eurogamer.net', 'January 31, 2012 16:00:00', 'test');
// Boombox
function countdown(obj, date)
{	
	// Time
	var msPerSecond = 1000;
	var msPerMinute = 60 * msPerSecond;
	var msPerHour = 60 * msPerMinute;
	var msPerDay = 24 * msPerHour;

	// Variables
	var j = jQuery;
	var boombox = j("#" + obj);
		
	// Countdown
	function boomboxCountdown ()
	{
		var difference = targetDate - new Date(); // Start With Seconds

		// Complete
		if( difference <= 0 )
		{
			//countdownCta();
			clearInterval(countdownTimerInterval);
		// Counting Down
		}
		else
		{
			countdownNumber(boombox, 'seconds', Math.floor(difference / msPerSecond) % 60);
            countdownNumber(boombox, 'minutes', Math.floor(difference / msPerMinute) % 60);
            countdownNumber(boombox, 'hours', Math.floor(difference / msPerHour) % 24);
            countdownNumber(boombox, 'days', Math.floor(difference / msPerDay));
		}

		boombox.addClass("active");
	};
	
	// Countdown Set Up
	function countdownBuild()
	{
		// Add To Container
		boombox.find('div')
			.append('<span class="days"><span class="number">0</span><span class="period">Days</span></span>')
			.append('<span class="hours"><span class="number">0</span><span class="period">Hours</span></span>')
			.append('<span class="minutes"><span class="number">0</span><span class="period">Mins</span></span>')
			.append('<span class="seconds"><span class="number">0</span><span class="period">Secs</span></span>');
	};
	 
	// Countdown Number
	function countdownNumber(boombox, id, number)
	{
		if ( number < 10 )
		{
			number = '0' + number;
		}
		boombox.find('.' + id).find('span.number').html(number);
	};
			
	// Init
	var targetDate = new Date(date); // Pretty Date
	countdownBuild();
	countdownTimerInterval = setInterval(boomboxCountdown, 1000);
};