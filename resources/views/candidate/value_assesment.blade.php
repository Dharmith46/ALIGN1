@extends('master_layout.candidate_master')
@section('value_assesment')

<main id="main" class="main">
      
    <div class="pagetitle">
      <nav>
        <h6>
        </h6>
      </nav>
    </div> 
    <!--End Page Title -->
    <div class="pagetitle">
      <h1>Values Assessment</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="container">
        <div id="word-bank-pages">
          <!-- Page 1 -->
          <div class="word-bank-page">
            <h5>Select up to 5 words that resonate with you:</h5>
            <div class="word-grid">
              <button class="word-btn" data-value="Variety">Variety</button>
              <button class="word-btn" data-value="Stability">Stability</button>
              <button class="word-btn" data-value="Ambition">Ambition</button>
              <button class="word-btn" data-value="Equality">Equality</button>
              <button class="word-btn" data-value="Kindness">Kindness</button>
              <button class="word-btn" data-value="Obedience">Obedience</button>
              <button class="word-btn" data-value="Heritage">Heritage</button>
              <button class="word-btn" data-value="Pleasure">Pleasure</button>
              <button class="word-btn" data-value="Authority">Authority</button>
              <button class="word-btn" data-value="Autonomy">Autonomy</button>
            </div>
          </div>

          <!-- Page 2 -->
          <div class="word-bank-page" style="display:none;">
            <h5>Select up to 5 words that resonate with you:</h5>
            <div class="word-grid">
              <button class="word-btn" data-value="Freedom">Freedom</button>
              <button class="word-btn" data-value="Challenge">Challenge</button>
              <button class="word-btn" data-value="Reliability">Reliability</button>
              <button class="word-btn" data-value="Success">Success</button>
              <button class="word-btn" data-value="Justice">Justice</button>
              <button class="word-btn" data-value="Care">Care</button>
              <button class="word-btn" data-value="Harmony">Harmony</button>
              <button class="word-btn" data-value="Customs">Customs</button>
              <button class="word-btn" data-value="Fun">Fun</button>
              <button class="word-btn" data-value="Influence">Influence</button>
            </div>
          </div>

          <!-- Page 3 -->
          <div class="word-bank-page" style="display:none;">
            <h5>Select up to 5 words that resonate with you:</h5>
            <div class="word-grid">
              <button class="word-btn" data-value="Freedom">Leadership</button>
              <button class="word-btn" data-value="Challenge">Independence</button>
              <button class="word-btn" data-value="Reliability">Adventure</button>
              <button class="word-btn" data-value="Success">Predictability</button>
              <button class="word-btn" data-value="Justice">Accomplishment</button>
              <button class="word-btn" data-value="Care">Protection</button>
              <button class="word-btn" data-value="Harmony">Compassion</button>
              <button class="word-btn" data-value="Customs">Structure</button>
              <button class="word-btn" data-value="Fun">Rituals</button>
              <button class="word-btn" data-value="Influence">Playfulness</button>
            </div>
          </div>

          <!-- Page 4 -->
          <div class="word-bank-page" style="display:none;">
            <h5>Select up to 5 words that resonate with you:</h5>
            <div class="word-grid">
              <button class="word-btn" data-value="Freedom">Enjoyment</button>
              <button class="word-btn" data-value="Challenge">Control</button>
              <button class="word-btn" data-value="Reliability">Intividuality</button>
              <button class="word-btn" data-value="Success">Novelty</button>
              <button class="word-btn" data-value="Justice">Comfort</button>
              <button class="word-btn" data-value="Care">Recognition</button>
              <button class="word-btn" data-value="Harmony">Fairness</button>
              <button class="word-btn" data-value="Customs">Generosity</button>
              <button class="word-btn" data-value="Fun">Order</button>
              <button class="word-btn" data-value="Influence">Preservation</button>
            </div>
          </div>

          <!-- Page 5 -->
          <div class="word-bank-page" style="display:none;">
            <h5>Select up to 5 words that resonate with you:</h5>
            <div class="word-grid">
              <button class="word-btn" data-value="Freedom">Lineage</button>
              <button class="word-btn" data-value="Challenge">Gratification</button>
              <button class="word-btn" data-value="Reliability">Status</button>
              <button class="word-btn" data-value="Success">Self-Epression</button>
              <button class="word-btn" data-value="Justice">Excitement</button>
              <button class="word-btn" data-value="Care">Risk Avoidance</button>
              <button class="word-btn" data-value="Harmony">Excellence</button>
              <button class="word-btn" data-value="Customs">Understanding</button>
              <button class="word-btn" data-value="Fun">Support</button>
              <button class="word-btn" data-value="Influence">Respect</button>
            </div>
          </div>
          
          <!-- Pagination Control -->
          <div class="pagination-controls">
            <button id="prev-page" class="btn btn-secondary" disabled>Previous</button>
            <button id="next-page" class="btn btn-primary">Next</button>
 
          </div>
        </div>
      </div>
    </section>
  </main><!-- End Main -->

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
        const pages = document.querySelectorAll('.word-bank-page');
        const nextPageBtn = document.getElementById('next-page');
        const prevPageBtn = document.getElementById('prev-page');
        let currentPage = 0;

        const updatePage = () => {
            pages.forEach((page, index) => {
                page.style.display = index === currentPage ? 'block' : 'none';
            });

            prevPageBtn.disabled = currentPage === 0;
            nextPageBtn.innerHTML = currentPage === pages.length - 1 ? 'Submit' : 'Next';
        };

        const updateSelectedWords = (page) => {
            const selectedButtons = page.querySelectorAll('.word-btn.selected');
            return Array.from(selectedButtons).map(btn => btn.getAttribute('data-value'));
        };

        const handleWordSelection = (page) => {
            const buttons = page.querySelectorAll('.word-btn');

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const selectedWords = updateSelectedWords(page);

                    if (button.classList.contains('selected')) {
                        button.classList.remove('selected');
                    } else if (selectedWords.length < 5) {
                        button.classList.add('selected');
                    } else {
                        alert('Only 5 words can be selected');
                    }
                });
            });
        };

        pages.forEach(page => {
            handleWordSelection(page);
        });

        nextPageBtn.addEventListener('click', () => {
            const selectedWords = updateSelectedWords(pages[currentPage]);

            if (selectedWords.length !== 5) {
                alert('Please select 5 words');
            } else if (currentPage < pages.length - 1) {
                currentPage++;
                updatePage();
            } else {
                // Submit functionality here
                alert('Submitting your Assesment ' );
            }
        });

        prevPageBtn.addEventListener('click', () => {
            if (currentPage > 0) {
                currentPage--;
                updatePage();
            }
        });

        updatePage();
    });
</script>


@endsection