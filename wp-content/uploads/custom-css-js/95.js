<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
	  console.log("Scroll up")
  } else {
    document.getElementById("header-nav").style.background = "#fff";
    document.getElementById("header-nav").style.boxShadow = "rgb(0 0 0 / 50%) 0px 0px 10px 0px";
	  console.log("Scroll down")
  }
  if(currentScrollPos === 0){
	document.getElementById("header-nav").style.background = "unset";
    document.getElementById("header-nav").style.boxShadow = "unset";
  }
  prevScrollpos = currentScrollPos;
}

</script>
<!-- end Simple Custom CSS and JS -->
