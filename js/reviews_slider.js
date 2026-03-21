const reviewCards = document.querySelectorAll(".review-card");
const reviewDots = document.querySelectorAll(".review-dot");
const prevReviewBtn = document.getElementById("reviewPrev");
const nextReviewBtn = document.getElementById("reviewNext");

let currentReview = 0;
let reviewInterval;

function showReview(index) {
  reviewCards.forEach((card, i) => {
    card.classList.toggle("active", i === index);
  });

  reviewDots.forEach((dot, i) => {
    dot.classList.toggle("active", i === index);
  });

  currentReview = index;
}

function nextReview() {
  const next = (currentReview + 1) % reviewCards.length;
  showReview(next);
}

function prevReview() {
  const prev = (currentReview - 1 + reviewCards.length) % reviewCards.length;
  showReview(prev);
}

function startReviewSlider() {
  reviewInterval = setInterval(nextReview, 5000);
}

function resetReviewSlider() {
  clearInterval(reviewInterval);
  startReviewSlider();
}

if (prevReviewBtn && nextReviewBtn) {
  prevReviewBtn.addEventListener("click", () => {
    prevReview();
    resetReviewSlider();
  });

  nextReviewBtn.addEventListener("click", () => {
    nextReview();
    resetReviewSlider();
  });
}

reviewDots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    showReview(index);
    resetReviewSlider();
  });
});

showReview(0);
startReviewSlider();