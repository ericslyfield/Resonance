document.addEventListener("DOMContentLoaded", function() {

// Define text style
const text = new Blotter.Text("Resonate", {
  family: "'Helvetica', sans-serif",
  size: 50,
  paddingTop: 50,
  paddingLeft: 50,
  paddingRight: 50,
  paddingBottom: 50,
  fill: '#000'
});

// Initialize Blotter.js
var material = new Blotter.ChannelSplitMaterial();


// Material Options

material.uniforms.uOffset.value = 0.017;
material.uniforms.uRotation.value = 90.0;
material.uniforms.uApplyBlur.value = 1.0;
material.uniforms.uAnimateNoise.value = 0.3;

// Function to update animation values
function updateAnimation() {
  // Update animation values here
  material.uniforms.uOffset.value += 0.001; // Example: Increase uOffset value over time
  material.uniforms.uRotation.value += 0.05; // Example: Increase uRotation value over time
  // You can update other animation values similarly
  
  // Request next animation frame
  requestAnimationFrame(updateAnimation);
}

// Start animation loop
updateAnimation();

var blotter = new Blotter(material, {
  texts: text,
});

// Apply to element
let scope = blotter.forText(text);
let elem = document.getElementById('blotter-container');
scope.appendTo(elem);



// // Apply effect to header
// var elem = document.getElementById("blotter-header");
// var scope = blotter.forText(elem);
// scope.appendTo(elem);

});