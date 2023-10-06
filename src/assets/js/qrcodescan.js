function qrFound(qrCode){
  alert(qrCode);
}

const html5QrCode = new Html5Qrcode("reader");

html5QrCode.start({facingMode: "environment"},{fps: 10 },qrFound)
  .catch(err => {
  console.log(err);
});