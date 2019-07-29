var hoursContainer = document.querySelector('.hours')
var minutesContainer = document.querySelector('.minutes')
var secondsContainer = document.querySelector('.seconds')
var tickElements = Array.from(document.querySelectorAll('.tick'))

var last = new Date(0)
last.setUTCHours(-1)

var tickState = true

function updateTime () {
  var now = new Date
  
  var lastHours = last.getHours().toString()
  var nowHours = now.getHours().toString()
  if (lastHours !== nowHours) {
    updateContainer(hoursContainer, nowHours)
  }
  
  var lastMinutes = last.getMinutes().toString()
  var nowMinutes = now.getMinutes().toString()
  if (lastMinutes !== nowMinutes) {
    updateContainer(minutesContainer, nowMinutes)
  }
  
  var lastSeconds = last.getSeconds().toString()
  var nowSeconds = now.getSeconds().toString()
  if (lastSeconds !== nowSeconds) {
    //tick()
    updateContainer(secondsContainer, nowSeconds)
  }
  
  last = now
}

function tick () {
  tickElements.forEach(t => t.classList.toggle('tick-hidden'))
}

function updateContainer (container, newTime) {
  var time = newTime.split('')
  
  if (time.length === 1) {
    time.unshift('0')
  }
  
  
  var first = container.firstElementChild
  if (first.lastElementChild.textContent !== time[0]) {
    updateNumber(first, time[0])
  }
  
  var last = container.lastElementChild
  if (last.lastElementChild.textContent !== time[1]) {
    updateNumber(last, time[1])
  }
}

function updateNumber (element, number) {
  //element.lastElementChild.textContent = number
  var second = element.lastElementChild.cloneNode(true)
  second.textContent = number
  
  element.appendChild(second)
  element.classList.add('move')

  setTimeout(function () {
    element.classList.remove('move')
  }, 990)
  setTimeout(function () {
    element.removeChild(element.firstElementChild)
  }, 990)
}

setInterval(updateTime, 100)


//--clock ver2-//

var $dOut = $('#date'),
    $hOut = $('#hours'),
    $mOut = $('#minutes'),
    $sOut = $('#seconds'),
    $ampmOut = $('#ampm');
var months = [
  'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
];

var days = [
  'Ahad', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
];

function update(){
  var date = new Date();
  
  /*var ampm = date.getHours() < 12
             ? 'AM'
             : 'PM';
             */
  
  var hours = date.getHours() == 0
              ? 12
              : date.getHours() > 24 // set format 24hour or 12 hour
                ? date.getHours() - 12
                : date.getHours();
  
  var minutes = date.getMinutes() < 10 
                ? '0' + date.getMinutes() 
                : date.getMinutes();
  
  var seconds = date.getSeconds() < 10 
                ? '0' + date.getSeconds() 
                : date.getSeconds();
  
  var dayOfWeek = days[date.getDay()];
  var month = months[date.getMonth()];
  var day = date.getDate();
  var year = date.getFullYear();
  
  var dateString = dayOfWeek + ', ' + day + ' ' + month + '  ' + year;
  
  $dOut.text(dateString);
  $hOut.text(hours);
  $mOut.text(minutes);
  $sOut.text(seconds);
  //$ampmOut.text(ampm);
} 

update();
window.setInterval(update, 1000);