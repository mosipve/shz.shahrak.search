<!doctype html>
<html lang="en-IR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
	<title> شهرک بزرگ صنعتی شیراز </title>
	<link href="favicon.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="search.css">

<script type="text/javascript">
  <!--
  var shiftState = 'lowercase';
  var altGrState = 'off';
  var capsLockState = 'off';

  function keyClick(key)
  {
    shiftToggle('normalKeyClick');
    altGrToggle('normalKeyClick');
    if(key == '&amp;')
    {
      key = '&';
    }
    if(key == '&lt;')
    {
      key = '<';
    }
    if(key == '&gt;')
    {
      key = '>';
    }    
    //if(key == 'backsp.')
    //{
    //  var formFieldValue = document.getElementById('echoField').value;
    //  document.getElementById('echoField').value = formFieldValue.substring(0, formFieldValue.length - 1); // Backspacing over newlines only works in Gecko based browsers
    //}    
    if(key == 'پاک.')
    {
      var formFieldValue = document.getElementById('echoField').value;
      document.getElementById('echoField').value = formFieldValue.substring(0, formFieldValue.length - 1); // Backspacing over newlines only works in Gecko based browsers
    }
    else
    {
      document.getElementById('echoField').value = document.getElementById('echoField').value + key;
    }
    document.getElementById('echoField').focus();
  }
    
  function shiftToggle(toggleType)
  {
    if((shiftState == 'lowercase') && (toggleType != 'normalKeyClick'))
    {
     /* document.getElementById('a').innerHTML = 'A';
      document.getElementById('b').innerHTML = 'B';
      document.getElementById('c').innerHTML = 'C';
      document.getElementById('d').innerHTML = 'D';
      document.getElementById('e').innerHTML = 'E';
      document.getElementById('f').innerHTML = 'F';
      document.getElementById('g').innerHTML = 'G';
      document.getElementById('h').innerHTML = 'H';
      document.getElementById('i').innerHTML = 'I';
      document.getElementById('j').innerHTML = 'J';
      document.getElementById('k').innerHTML = 'K';
      document.getElementById('l').innerHTML = 'L';
      document.getElementById('m').innerHTML = 'M';
      document.getElementById('n').innerHTML = 'N';
      document.getElementById('o').innerHTML = 'O';
      document.getElementById('p').innerHTML = 'P';
      document.getElementById('q').innerHTML = 'Q';
      document.getElementById('r').innerHTML = 'R';
      document.getElementById('s').innerHTML = 'S';
      document.getElementById('t').innerHTML = 'T';
      document.getElementById('u').innerHTML = 'U';
      document.getElementById('v').innerHTML = 'V';
      document.getElementById('w').innerHTML = 'W';
      document.getElementById('x').innerHTML = 'X';
      document.getElementById('y').innerHTML = 'Y';
      document.getElementById('z').innerHTML = 'Z';
      document.getElementById('ae').innerHTML = '?';
      document.getElementById('oe').innerHTML = '?';
      document.getElementById('aa').innerHTML = '?';
      document.getElementById('oneHalf').innerHTML = '§';
      document.getElementById('n1').innerHTML = '!';
      document.getElementById('n2').innerHTML = '\"';
      document.getElementById('n3').innerHTML = '#';
      document.getElementById('n4').innerHTML = '¤';
      document.getElementById('n5').innerHTML = '%';
      document.getElementById('n6').innerHTML = '&amp;';
      document.getElementById('n7').innerHTML = '\/';
      document.getElementById('n8').innerHTML = '(';
      document.getElementById('n9').innerHTML = ')';
      document.getElementById('n0').innerHTML = '=';
      document.getElementById('plus').innerHTML = '?';
      document.getElementById('forwardSingleQuote').innerHTML = '`';
      document.getElementById('lessThan').innerHTML = '&gt;';
      document.getElementById('comma').innerHTML = '\;';
      document.getElementById('dot').innerHTML = ':';
      document.getElementById('dash').innerHTML = '_';
      document.getElementById('singleQuote').innerHTML = '*';
      document.getElementById('umlaut').innerHTML = '^';
      shiftState = 'uppercase';*/
    }
    else if (shiftState == 'uppercase')
    {
      if(capsLockState == 'off')
      {
        document.getElementById('a').innerHTML = 'a';
        document.getElementById('b').innerHTML = 'b';
        document.getElementById('c').innerHTML = 'c';
        document.getElementById('d').innerHTML = 'd';
        document.getElementById('e').innerHTML = 'e';
        document.getElementById('f').innerHTML = 'f';
        document.getElementById('g').innerHTML = 'g';
        document.getElementById('h').innerHTML = 'h';
        document.getElementById('i').innerHTML = 'i';
        document.getElementById('j').innerHTML = 'j';
        document.getElementById('k').innerHTML = 'k';
        document.getElementById('l').innerHTML = 'l';
        document.getElementById('m').innerHTML = 'm';
        document.getElementById('n').innerHTML = 'n';
        document.getElementById('o').innerHTML = 'o';
        document.getElementById('p').innerHTML = 'p';
        document.getElementById('q').innerHTML = 'q';
        document.getElementById('r').innerHTML = 'r';
        document.getElementById('s').innerHTML = 's';
        document.getElementById('t').innerHTML = 't';
        document.getElementById('u').innerHTML = 'u';
        document.getElementById('v').innerHTML = 'v';
        document.getElementById('w').innerHTML = 'w';
        document.getElementById('x').innerHTML = 'x';
        document.getElementById('y').innerHTML = 'y';
        document.getElementById('z').innerHTML = 'z';
        document.getElementById('ae').innerHTML = '?';
        document.getElementById('oe').innerHTML = '?';
        document.getElementById('aa').innerHTML = '?';
        document.getElementById('oneHalf').innerHTML = '½';
        document.getElementById('n1').innerHTML = '1';
        document.getElementById('n2').innerHTML = '2';
        document.getElementById('n3').innerHTML = '3';
        document.getElementById('n4').innerHTML = '4';
        document.getElementById('n5').innerHTML = '5';
        document.getElementById('n6').innerHTML = '6';
        document.getElementById('n7').innerHTML = '7';
        document.getElementById('n8').innerHTML = '8';
        document.getElementById('n9').innerHTML = '9';
        document.getElementById('n0').innerHTML = '0';
        document.getElementById('plus').innerHTML = '+';
        document.getElementById('forwardSingleQuote').innerHTML = '´';
        document.getElementById('lessThan').innerHTML = '&lt;';
        document.getElementById('comma').innerHTML = ',';
        document.getElementById('dot').innerHTML = '.';
        document.getElementById('dash').innerHTML = '-';
        document.getElementById('singleQuote').innerHTML = '\'';
        document.getElementById('umlaut').innerHTML = '¨';
        shiftState = 'lowercase';
      }
    }
  }

  function altGrToggle(toggleType)
  {
    if((altGrState == 'off') && (toggleType != 'normalKeyClick'))
    {
      /*document.getElementById('n2').innerHTML = '@';
      document.getElementById('n3').innerHTML = '£';
      document.getElementById('e').innerHTML = '€';
      document.getElementById('n4').innerHTML = '$';
      document.getElementById('n7').innerHTML = '{';
      document.getElementById('n8').innerHTML = '[';
      document.getElementById('n9').innerHTML = ']';
      document.getElementById('n0').innerHTML = '}';
      document.getElementById('forwardSingleQuote').innerHTML = '|';
      document.getElementById('umlaut').innerHTML = '~';
      document.getElementById('lessThan').innerHTML = '\\';
      altGrState = 'on';*/
    }
    else if (altGrState == 'on')
    {
      document.getElementById('n2').innerHTML = '2';
      document.getElementById('n3').innerHTML = '3';
      document.getElementById('e').innerHTML = 'e';
      document.getElementById('n4').innerHTML = '4';
      document.getElementById('n7').innerHTML = '7';
      document.getElementById('n8').innerHTML = '8';
      document.getElementById('n9').innerHTML = '9';
      document.getElementById('n0').innerHTML = '0';
      document.getElementById('forwardSingleQuote').innerHTML = '´';
      document.getElementById('umlaut').innerHTML = '¨';
      document.getElementById('lessThan').innerHTML = '&lt;';
      altGrState = 'off';
    }
  }

  /*function toggleCapsLock()
  {
    if(capsLockState == 'off')
    {
      capsLockState = 'on';
      shiftToggle('capsLock')
    }
    else
    {
      capsLockState = 'off';
      shiftToggle('capsLock');
    }
  }*/
  -->
</script>

	
</head>

<body>
	
	
	<div id="mybody">
	
<!------------------------------------->		
		<div id="myhead">
			
			<ul>
				<li><a href="#"> فارسی  </a></li>
				<li><a href="#"> ENGLISH </a></li>
				<li><a href="#">  العربی </a></li>
				<li class="thed"><h3> شهرک بزرگ صنعتی شیراز </h3></li>
			</ul>
			
		</div>
<!------------------------------------->		
		<div id="mypage">
			
			<div class="myinput">
				<!-- <input type="text"  id="echoField" placeholder=" آدرس یا نام شرکت یا نام تجاری و یا شماره تماس را به وسیله دکمه های پائین وارد کنید . " /> -->
				
				<form action="answer.php" method="post" class="sm-form">
					
					<ul class="myform">
							
						<li><p> آدرس یا نام شرکت یا نام تجاری و یا شماره تماس را به وسیله دکمه های پائین وارد کنید . سپس دکمه جستجوی اطلاعات را لمس کنید . </p></li>
							<li>
							<input type = "text" name="search" id="echoField" class = "jQKeyboard form-control" placeholder="   " value="" />
							</li>
						
							
						<li><input type="submit" value="جستجوي اطلاعات" class="sm-sub"/></li>
					</ul>
					
				</form>
				
				
				<article id="board">
				
					<section id="keyboard">
									
						<div class="state02">
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ذ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">د</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">خ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ح</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">چ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ج</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ث</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ت</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">پ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ب</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ا</button>
						</div>
						
						<div class="state03">
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">غ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ع</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ظ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ط</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ض</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ص</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ش</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">س</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ژ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ز</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ر</button>
						</div>
						
						<div class="state04">
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ء</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ی</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ه</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">و</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ن</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">م</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ل</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">گ</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ک</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ق</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">ف</button>
						</div>
						
						
						<div class="state06">
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">.</button>
							<button class="key" id="Space" onclick="keyClick(' ')">فاصله</button>
							<!-- <button class="key" id="backsp" value="پاک کردن" onclick="keyClick(this.innerHTML)">backsp.</button> -->
							<button class="key" id="backsp" value="پاک کردن" onclick="keyClick(this.innerHTML)">پاک.</button>
						</div>
						
					</section>
					
					<section id="numpad">
						
						<div class="state07">
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">1</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">2</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">3</button><br />
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">4</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">5</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">6</button><br />
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">7</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">8</button>
							<button class="key" id="n0" onclick="keyClick(this.innerHTML)">9</button><br />
							<button class="key zero" id="n0" onclick="keyClick(this.innerHTML)">0</button>
							
						</div>
					</section>
				
				<div id="cls"></div>
				
				</article>
				
				
				
				
			</div>
			
		</div>
<!------------------------------------->	
		<div id="myfoot">
			
			<details class="mydetails">
			  <br /><summary id="mySummary">Copyright 2007-<?php echo Date('Y') ; ?>.</summary>
			  <p> - طراحی و تولید در :<abbr id="myAbbr" title="www.ttouch.biz"> استودیو T.Touch</abbr>. </p>
			  <p> - تمامی حقوق نرم افزار متعلق به مالک میباشد .</p>
			  <address id="myAdr">
				www.ttouch.org<br />
				first SQ - no bonyad BLVD  <br />
				 ST 2400 - T.TOUCH
			  </address>
			</details>
			
		</div>
<!------------------------------------->	
	
	</div>
	
	
</body>
</html>