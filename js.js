
$.ajax({
url: 'https://randomuser.me/api/',
dataType: 'json',
success: function(data) {
  console.log(data);
  document.getElementById("nombre1").innerHTML = data.results[0].name.title +" " +
   data.results[0].name.first +" " +
   data.results[0].name.last;
   document.getElementById("image1").src = data.results[0].picture.large;
  document.getElementById("telef1").innerHTML = data.results[0].phone;
  document.getElementById("direc1").innerHTML = data.results[0].location.street.name+ " "+
  data.results[0].location.street.number + ", Ciudad: " + data.results[0].location.city;
}
});


$( "#boton1" ).click(function() {
  $( ".accordion-collapse").hide();
});

$( "#boton2").click(function() {
  $( ".accordion-collapse").show();
});
