document.addEventListener('DOMContentLoaded', function () {
  // Helper function to safely add event listeners
  function safeAddEventListener(element, event, handler) {
    if (element) {
      element.addEventListener(event, handler);
    }
  }
  // Hamburger Menu


  // Quick Links and Contact Us Toggle
  const quickLinksHeader = document.getElementById('quickLinksHeader');
  const quickLinksList = document.getElementById('quickLinksList');
  const veelGmailContent = document.getElementById('veelGmailContent');
  const veelPhoneCall = document.getElementById('veelPhoneCall');
  const cntactUsHeader = document.getElementById('cntactUsHeader');

  safeAddEventListener(cntactUsHeader, 'click', function () {
    if (veelPhoneCall.style.display === 'none' || veelPhoneCall.style.display === '') {
      veelPhoneCall.style.display = 'flex';
      veelGmailContent.style.display = 'flex';
    } else {
      veelGmailContent.style.display = 'none';
      veelPhoneCall.style.display = 'none';
    }
  });

  safeAddEventListener(quickLinksHeader, 'click', function () {
    quickLinksList.style.display =
      quickLinksList.style.display === 'none' || quickLinksList.style.display === ''
        ? 'block'
        : 'none';
  });

  // Carousel Functionality
  function setupCarousel(containerId, leftArrowId, rightArrowId, scrollAmount) {
    const container = document.getElementById(containerId);
    const leftArrow = document.getElementById(leftArrowId);
    const rightArrow = document.getElementById(rightArrowId);

    safeAddEventListener(rightArrow, 'click', function () {
      container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });

    safeAddEventListener(leftArrow, 'click', function () {
      container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });
  }

  // Setup individual carousels
  setupCarousel('veelDeveloperGallery', 'developerLeftArrow', 'developerRightArrow', 200);
  setupCarousel('allInOne', 'testimonialsLeft', 'testimonialsRight', 1100);
  setupCarousel('blogImgGallery', 'blogLeftArrow', 'blogRightArrow', 300);
  setupCarousel('topImgGallery', 'topLc', 'topBox', 300);
  setupCarousel('veeLatestImageGallery', 'latest-left-arrow', 'latest-right-arrow', 300);
  setupCarousel('newProjectImgGallery', 'newProjectLeftArrow', 'newProjectsRightArrow', 300);


  safeAddEventListener(xMark, 'click', function () {
    veelMobilenavbar.style.display =
      veelMobilenavbar.style.display === 'none' ? 'flex' : 'none';
  });

  // Pagination
  const itemsPerPage = 3; // Number of items to display per page
  const items = document.querySelectorAll('#itemList li');
  const paginationContainer = document.getElementById('pagination');
  const nextButton = document.getElementById('nxt');
  const prevButton = document.getElementById('prv');
  let currentPage = 1;
  const totalPages = Math.ceil(items.length / itemsPerPage);

  function renderItems(page) {
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    items.forEach((item, index) => {
      item.style.display = index >= start && index < end ? 'block' : 'none';
    });
  }

  function renderPagination() {
    paginationContainer.innerHTML = '';
    for (let i = 1; i <= totalPages; i++) {
      const li = document.createElement('li');
      const a = document.createElement('a');
      a.href = '#';
      a.textContent = i;
      a.className = i === currentPage ? 'active' : '';

      safeAddEventListener(a, 'click', (event) => {
        event.preventDefault();
        currentPage = i;
        renderItems(currentPage);
        renderPagination();
      });

      li.appendChild(a);
      paginationContainer.appendChild(li);
    }
  }

  safeAddEventListener(nextButton, 'click', (event) => {
    event.preventDefault();
    if (currentPage < totalPages) {
      currentPage++;
      renderItems(currentPage);
      renderPagination();
    }
  });

  safeAddEventListener(prevButton, 'click', (event) => {
    event.preventDefault();
    if (currentPage > 1) {
      currentPage--;
      renderItems(currentPage);
      renderPagination();
    }
  });

  // Initial rendering for pagination
  renderItems(currentPage);
  renderPagination();
});
