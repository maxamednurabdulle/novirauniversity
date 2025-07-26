document.getElementById("joinForm").addEventListener("submit", function(e) {
  e.preventDefault();
  document.getElementById("msg").textContent = "Waad ku mahadsantahay inaad ku biirtay!";
  this.reset();
});
