function logoutFunction() {
    // Get the form element
    var form = document.getElementById("logoutForm");

    // Submit the form
    form.submit();
}

function copyClipBoard() {
    var copyText = document.getElementById("referInput");
    copyText.select();
    document.execCommand("copy");
}


// Get the canvas element
const canvas = document.getElementById('chart');
const ctx = canvas.getContext('2d');

// Retrieve the progress attribute value
const progress = parseFloat(canvas.getAttribute('progress')) / 100;

// Define the chart properties
const centerX = canvas.width / 2;
const centerY = canvas.height / 2;
const radius = Math.min(centerX, centerY) * 0.8;

// Draw the chart
function drawChart() {
  // Clear the canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Draw the background circle
  ctx.beginPath();
  ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI);
  ctx.fillStyle = '#f2f2f2';
  ctx.fill();

  // Draw the progress arc
  ctx.beginPath();
  ctx.arc(centerX, centerY, radius, -Math.PI / 2, (-Math.PI / 2) + (2 * Math.PI * progress));
  ctx.lineWidth = 20;
  ctx.strokeStyle = 'red';
  ctx.stroke();

  // Draw the progress text
  ctx.font = '24px Arial';
  ctx.fillStyle = '#000';
  ctx.textAlign = 'center';
  ctx.textBaseline = 'middle';
  ctx.fillText((progress * 100) + '%', centerX, centerY);
}

// Call the drawChart function
drawChart();
