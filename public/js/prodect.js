// Image

document.addEventListener('DOMContentLoaded', function() {
  const mainImage = document.getElementById('mainImage');
  const thumbnails = document.querySelectorAll('.product-thumbnail');
  const thumbnailContainer = document.querySelector('.thumbnail-container');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  let currentIndex = 0;
  const visibleThumbnails = 4;

  function updateThumbnails() {
    thumbnails.forEach((thumbnail, index) => {
      if (index >= currentIndex && index < currentIndex + visibleThumbnails) {
        thumbnail.style.display = 'block';
      } else {
        thumbnail.style.display = 'none';
      }
    });
  }

  function updateButtons() {
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex + visibleThumbnails >= thumbnails.length;
  }

  thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', function() {
      mainImage.src = this.dataset.image;
      setActiveClass(index);
    });

    thumbnail.addEventListener('mouseenter', function() {
      if (!this.classList.contains('active')) {
        mainImage.src = this.dataset.image;
      }
    });

    thumbnail.addEventListener('mouseleave', function() {
      if (!this.classList.contains('active')) {
        mainImage.src = thumbnails[Array.from(thumbnails).findIndex(t => t.classList.contains('active'))].dataset.image;
      }
    });
  });

  function setActiveClass(index) {
    thumbnails.forEach(t => t.classList.remove('active'));
    thumbnails[index].classList.add('active');
  }

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateThumbnails();
      updateButtons();
    }
  });

  nextBtn.addEventListener('click', () => {
    if (currentIndex + visibleThumbnails < thumbnails.length) {
      currentIndex++;
      updateThumbnails();
      updateButtons();
    }
  });
  // Set the first thumbnail as active initially
  setActiveClass(0);
  updateThumbnails();
  updateButtons();
});




// 2.Quantity functionality
const quantityBtns = document.querySelectorAll('.quantity-btn');
const quantityInput = document.querySelector('.quantity-input');

let intervalId;
const updateQuantity = (increment) => {
  let quantity = parseInt(quantityInput.value) || 0;
  if (increment) {
    quantity = quantity < 100 ? quantity + 1 : 100;
  } else {
    quantity = quantity > 1 ? quantity - 1 : 1;
  }
  quantityInput.value = quantity;
};

quantityBtns.forEach(btn => {
  btn.addEventListener('mousedown', () => {
    const increment = btn.textContent === '+';
    updateQuantity(increment);
    intervalId = setInterval(() => updateQuantity(increment), 150);
  });

  btn.addEventListener('mouseup', () => clearInterval(intervalId));
  btn.addEventListener('mouseleave', () => clearInterval(intervalId));
});

quantityInput.addEventListener('input', (e) => {
  // Allow only digits
  e.target.value = e.target.value.replace(/\D/g, '');
  
  let quantity = parseInt(e.target.value);
  
  if (quantity > 100) {
    e.target.value = '100';
  }
});

quantityInput.addEventListener('blur', (e) => {
  if (e.target.value === '' || parseInt(e.target.value) < 1) {
    e.target.value = '1';
  }
});


// 3.weight
const weightBtns = document.querySelectorAll('.weight-btn');
weightBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    weightBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
  });
});


// 4.Tab functionality
const tabs = document.querySelectorAll('.prodect_detail');
const tabPanes = document.querySelectorAll('.tab-pane');

tabs.forEach((tab, index) => {
  tab.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent default link behavior

    // Remove active class from all tabs and tab panes
    tabs.forEach(t => t.classList.remove('active'));
    tabPanes.forEach(pane => {
      pane.classList.remove('show', 'active');
      pane.style.display = 'none';
    });

    // Add active class to clicked tab
    tab.classList.add('active');

    // Show the corresponding tab pane with fade-in effect
    const targetPane = tabPanes[index];
    targetPane.style.display = 'block';
    setTimeout(() => {
      targetPane.classList.add('show', 'active');
    }, 10);
  });
});





