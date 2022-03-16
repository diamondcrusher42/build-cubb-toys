const cookieNotice = document.getElementById('cookie-notice');

if (cookieNotice) {
  if (!getCookie('cookie_notice')) {
    cookieNotice.style.display = 'block';
  }

  const acceptBtn = document.getElementById('cookie-accept');

  acceptBtn.addEventListener('click', function () {
    setCookie('cookie_notice', 1, 365);
    cookieNotice.style.display = 'none';
  });
}

function getCookie(name) {
  var cookieArr = document.cookie.split(";");
  for(var i = 0; i < cookieArr.length; i++) {
      var cookiePair = cookieArr[i].split("=");
      if(name == cookiePair[0].trim()) {
          return decodeURIComponent(cookiePair[1]);
      }
  }
  return false;
}

function setCookie(name, value, daysToLive) {
  var cookie = name + "=" + encodeURIComponent(value);
  if(typeof daysToLive === "number") {
      cookie += "; max-age=" + (daysToLive * 24 * 60 * 60);
      document.cookie = cookie;
  }
}