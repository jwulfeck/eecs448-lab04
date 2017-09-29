function validate(){
  var success = true;
  //at least one radio button checked
  if (document.getElementById('sevenday').checked ||
      document.getElementById('overnight').checked ||
      document.getElementById('threeday').checked){
  }
  else{
    success = false;
  }
  //pw and order # fields filled in
  var blueVal = document.getElementById('blueOrders').value;
  var redVal = document.getElementById('redOrders').value;
  var greenVal = document.getElementById('greenOrders').value;
  var pwVal = document.getElementById('pw').value;
  if (!blueVal || !redVal || !greenVal || !pwVal ){
    success = false;
  }
  //order values not negative
  if (blueVal < 0 || redVal < 0 || greenVal <0){
    success = false;
  }
  //credit to Squirtle on stackoverflow for this regex
  //username is an email
  var emailRegex = /\S+@\S+\.\S+/;
  if (!emailRegex.test(document.getElementById('userName').value)){
    success = false;
  }
  if (!success){
    window.alert("Submission is invalid.");
    return false;
  }
  else{
    return true;
  }
}
