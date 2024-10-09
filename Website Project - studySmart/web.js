<!-- JavaScript for loading and displaying the reviews -->
<script>
  const reviewsContainer = document.getElementById("reviews");
  const loadMoreBtn = document.getElementById("load-more-btn");

  let currentReviews = [];
  let page = 0;
  const pageSize = 10;

  function loadReviews() {
    // Load the next page of reviews from the server
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `/reviews?page=${page}&pageSize=${pageSize}`);
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Update the current reviews and render them to the page
        currentReviews = JSON.parse(xhr.responseText);
        renderReviews();

        // Update the page number and check if we have more reviews to load
        page++;
        if (currentReviews.length < pageSize) {
          loadMoreBtn.style.display = "none";
        }
      }
    };
    xhr.send();
  }

  function renderReviews() {
    // Clear the reviews container
    reviewsContainer.innerHTML = "";

    // Render each review to the page
    currentReviews.forEach(review => {
      const reviewEl = document.createElement("div");
      reviewEl.classList.add("review");
      reviewEl.innerHTML = `
        <h3>${review.title}</h3>
        <p>${review.body}</p>
      `;