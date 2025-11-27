<?php $current_lang = qtrans_getLanguage();
  if ($current_lang == "en") {
    $business = "Business";
    $design = "Design";
    $engineering = "Engineering";
    $corporate = "Corporate";
  } else {
    $business = "ビジネス";
    $design = "デザイン";
    $engineering = "エンジニア";
    $corporate = "コーポレート";
  }
?>
<?php
  // get a list of available taxonomies for a post type
  $taxonomies = get_taxonomies(['object_type' => ['careers']], 'names');
?>
<section class="page-title section-block section-block--mb-5">
  <div class="page-title__inner">
  <?php 
    $i = 0;
    foreach ($taxonomies as $key => $taxonomy){
      $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
      $hasTerms = is_array($terms) && $terms;
      if($hasTerms){
        if($taxonomy === 'careers_business' || $taxonomy === 'careers_corporate' || $taxonomy === 'careers_design' || $taxonomy === 'careers_engineering') {
          if($i === 0) {
            echo '<h4 class="page-title__name">職種別</h4>';
          }
          $i++;
        } 
      }
    }
  ?>
  </div>
</section>

<!-- DESKTOP -->
<section class="container section-block current-recruiting-desktop">
  <div class="container__inner container__inner--careers">
    <div class="jobs-container">
      <div class="jobs" id="jobs">
        <ul class="job-primary">
          <?php 
            // loop over taxonomies
            foreach ($taxonomies as $key => $taxonomy){
              // retrieve all available terms, including those not yet used
              $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
              // make sure $terms is an array, as it can be an int (count) or a WP_Error
              $hasTerms = is_array($terms) && $terms;
              if($hasTerms){
                if($taxonomy === 'careers_business' || $taxonomy === 'careers_corporate' || $taxonomy === 'careers_design' || $taxonomy === 'careers_engineering') {
                  echo '<li id="'.$taxonomy.'_Tab">
                          <a href="#" class="job-link" data-target="'.$taxonomy.'_Tags">
                            <span>';
                            if($taxonomy === 'careers_business') {
                              echo $business;
                            } else if($taxonomy === 'careers_design') {
                              echo $design;
                            } else if($taxonomy === 'careers_engineering') {
                              echo $engineering;
                            } else if($taxonomy === 'careers_corporate') {   
                              echo $corporate;
                            }
                  echo '    </span>
                          </a>
                        </li>';
                }
              }
            }
          ?>
        </ul>
        <?php 
          foreach ($taxonomies as $key => $taxonomy){
            $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
            $hasTerms = is_array($terms) && $terms;
            if($hasTerms){
              if($taxonomy === 'careers_business' || $taxonomy === 'careers_corporate' || $taxonomy === 'careers_design' || $taxonomy === 'careers_engineering') {
                $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
                if($terms){
                  echo '<div class="job-tertiary" id="'.$taxonomy.'_Tags">
                          <div class="job-tertiary__tags">';  
                            foreach ($terms as $key => $term) {
                              echo '<a href="/'.$taxonomy.'/'.$term->slug.'"><span>'.$term->name.'</span></a>';
                            }
                  echo '  </div>
                        </div>';
                }
              } 
            }
          }
        ?>
      </div>
    </div>
  </div>
</section>


<!-- MOBILE -->

<section class="container section-block current-recruiting-mobile">
  <div class="container__inner container__inner--careers">
    <div class="accordion-career">
      <?php 
        foreach ($taxonomies as $key => $taxonomy){
          $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
          $hasTerms = is_array($terms) && $terms;
          if($hasTerms){
            if($taxonomy === 'careers_business' || $taxonomy === 'careers_corporate' || $taxonomy === 'careers_design' || $taxonomy === 'careers_engineering') {
              $terms = get_terms(['taxonomy' => $taxonomy, 'hide_empty' => true]);
              if($terms){
                echo '<button class="accordion-career-btn">';
                        if($taxonomy === 'careers_business') {
                          echo $business;
                        } else if($taxonomy === 'careers_design') {
                          echo $design;
                        } else if($taxonomy === 'careers_engineering') {
                          echo $engineering;
                        } else if($taxonomy === 'careers_corporate') {   
                          echo $corporate;
                        }
                echo '  <span class="icon"></span>
                      </button>
                      <div class="accordion-career-content">';  
                        foreach ($terms as $key => $term) {
                          echo '<a href="/'.$taxonomy.'/'.$term->slug.'"><span>'.$term->name.'</span></a>';
                        }
                echo '</div>';
              }
            } 
          }
        }
      ?>
        
    </div>
  </div>
</section>

<script>

  // desktop
  document.addEventListener("DOMContentLoaded", function() {
    
    const jobList = document.querySelector(".job-primary");
    //get all links
    const links = document.querySelectorAll('.job-link');
    // Get the first <a> element within the first <li> element within the <ul> and add the "active" class to it
    const firstJobLink = document.querySelector(".job-link");
    if (firstJobLink) {
      firstJobLink.classList.add("active");
    }

    const jobTagsContainer = document.querySelector(".job-tertiary");
    if (jobTagsContainer) {
      jobTagsContainer.classList.add("active");
    }


    links.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();

        // Remove active class from all links
        links.forEach(link => {
          link.classList.remove('active');
        });

        // Add active class to clicked link
        this.classList.add('active');

        // Hide all sections
        const sections = document.querySelectorAll('.job-tertiary');
        sections.forEach(section => {
          section.classList.remove('active');
        });

        // Show the corresponding section
        const targetId = this.getAttribute('data-target');
        const targetSection = document.getElementById(targetId);
        targetSection.classList.add('active');
      });
    });
  

    //mobile accordion
  const accordionBtns = document.querySelectorAll('.accordion-career-btn');
  accordionBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      
      

      // Toggle icon (+/-)
      const icon = this.querySelector('.icon');
      if (!icon.classList.contains('active')) {
        icon.classList.add('active');
      } else {
        icon.classList.remove('active');
      }

      // Get the next sibling which is the content div
      const content = this.nextElementSibling;

      // Toggle display of content with animation
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
      } else {
        // Hide all content divs before showing the clicked one
        accordionBtns.forEach(btn => {
          btn.classList.remove('active');
          const siblingContent = btn.nextElementSibling;
          if (siblingContent !== content) {
            siblingContent.style.maxHeight = null;
            siblingContent.previousElementSibling.querySelector('.icon').classList.remove('active');
          }
        });
        content.style.maxHeight = content.scrollHeight + "px";
      }


      // Toggle active class to btn
      this.classList.toggle('active');

    });

    // Set initial max-height for active content
    const content = btn.nextElementSibling;
    if (btn.classList.contains('active')) {
      content.style.maxHeight = content.scrollHeight + "px";
      btn.querySelector('.icon').classList.add('active');
    }
  });
});

  

</script>