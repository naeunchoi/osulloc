
            //CountDownTimer('01/01/2020', 'countdown'); // 2017년 1월 1일까지
            CountDownTimer('08/31/2019 00:00 AM', 'newcountdown'); // 2018년 1월 1일까지, 시간을 표시하려면 01:00 AM과 같은 형식을 사용합니다.
            
            function CountDownTimer(dt, id)
            {
            var end = new Date(dt);
           
            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;
            
            function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {
            
            clearInterval(timer);
            // document.getElementById(id).innerHTML = 'EXPIRED!';
            
            return;
            }
			
			function pad(n, width) {
			  n = n + '';
			  return n.length >= width ? n : new Array(width - n.length + 1).join('0') + n;
			}
			/*
				* Hong's Add
				간단 ! 삼향 연산자 설명
				n.length >= width ? n : new Array(width - n.length + 1).join('0') + n;
				1. ? 앞이 조건 문
				if(n.length >= width){}  <-- 이뜻에 해당한다
			
				? n : 에서의 n  
				if(n.length >= width){
					n
				} 
				에 해당한다

				if(n.length >= width){
					n
				} else{
					new Array(width - n.length + 1).join('0') + n;  //뒤에 부분은 else에 해당한다
				}
			
			*/

         //   var days = Math.floor(distance / _day);
			//	 days = string.substr(0,1);
            var hours = Math.floor((distance % _day) / _hour);
		
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

			var hours = pad(hours, 2)
			var minutes = pad(minutes, 2)
			var seconds = pad(seconds, 2)

			var hours = String(hours);
			var hours = hours.split("");

			var minutes = String(minutes);
			var minutes = minutes.split("");
			
			var seconds = String(seconds);
			//console.log(seconds)		
			var seconds = seconds.split("");

            //document.getElementById(id).innerHTML = days + '일 ';
            document.getElementsByClassName('hour0')[0].innerHTML = hours[0];
			document.getElementsByClassName('hour1')[0].innerHTML = hours[1];
			// document.getElementsByClassName(id).innerHTML +=":";
            document.getElementsByClassName('min0')[0].innerHTML = minutes[0];
			document.getElementsByClassName('min1')[0].innerHTML = minutes[1];
			// document.getElementsByClassName(id).innerHTML += ":";
            document.getElementsByClassName('sec0')[0].innerHTML = seconds[0];
			document.getElementsByClassName('sec1')[0].innerHTML = seconds[1];

            }
            
            timer = setInterval(showRemaining, 1000);
            }
   