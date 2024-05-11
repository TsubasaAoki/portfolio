$(function () {
  // form init
  $('#url').val('');

  // converted url
  if ($('#converted-url')[0] != null) {
    _copyConvertedUrl();
    $('#converted-url').on('click focus', function() {
      _copyConvertedUrl(this);
    });
  }

  // validation
  let check = true;
  $('#url').on('keyup paste cut', function() {
    setTimeout(function(){
      check = _isValidUrl($('#url').val());
      _switchButton(check);
    }, 100);
  });
});

function _isValidUrl(string) {
  try {
    new URL(string);
    return true;
  } catch (err) {
    return false;
  }
}

function _switchButton(check) {
  if (check) {
    $('.url button').prop('disabled', false);
  } else {
    $('.url button').prop('disabled', true);
  }
}

async function _copyConvertedUrl() {
  try {
    await navigator.clipboard.writeText($('#converted-url').text());
    new jBox('Notice', {
      content: 'コピーしました。',
      color: 'black',
      showCountdown: true,
      attributes: {
        x: 'right',
        y: 'bottom'
      }
    });
  } catch (err) {
    _selectDomElm($('#converted-url')[0]);
  }
}

function _selectDomElm(obj){
  var range = document.createRange();
  range.selectNodeContents(obj);
  var selection = window.getSelection();
  selection.removeAllRanges();
  selection.addRange(range);
}