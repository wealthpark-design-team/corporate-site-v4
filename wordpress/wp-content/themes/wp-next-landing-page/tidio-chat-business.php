<script src="//code.tidio.co/pv75zc6iggqlxgvocsmlteslst60gilp.js" async></script>
<script>
(function() {
function isMobile() {
try {
return !!(
navigator.userAgent &&
/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
);
} catch (e) {
return false;
}
}

function onTidioChatApiReady() {
var timeoutInSeconds = 8;
setTimeout(function() {
if (!isMobile()) {
window.tidioChatApi.open();
}
}, timeoutInSeconds * 1000)
}
if (window.tidioChatApi) {
window.tidioChatApi.on('ready', onTidioChatApiReady)
} else {
document.addEventListener('tidioChat-ready', onTidioChatApiReady);
}
})();
</script>