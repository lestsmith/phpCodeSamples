function supportsTemplate() {
  return 'content' in document.createElement('template');
}

if (supportsTemplate()) {
  alert('ok');
} else {
  alert('Not this time');
}

document.addEventListener("DOMContentLoaded", init, false);