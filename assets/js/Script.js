jQuery( document ).ready( function($) {
    $( window ).scroll( function () {
      if ( $(document).scrollTop() > 10 ) {
        // Navigation Bar
        $('.navbar').removeClass('fadeInUp');
        $('body').addClass('shrink');
        $('.navbar').addClass('animated fadeDown');
      } else {
        $('.navbar').removeClass('animated fadeInUp');
        $('body').removeClass('shrink');
        $('.navbar').addClass('animated fadeIn');
      }
    });
  });

  $(document).ready(function() {
    $('#tentang').click(function() {
      $('#isi').empty().append('');
      // Mengisi tag html prifle tentang
      $('#isi').append(' <p data-aos="fade-up" >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem similique, ipsum quia voluptate nostrum quam dolorum dolor, aut deserunt, beatae perferendis quo necessitatibus reprehenderit enim tempore ut minima? Eos, harum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Non neque cumque asperiores quasi sit quod tempore quaerat dignissimos fugit. Facere dolorem, consectetur tempore eum adipisci accusamus eligendi quia aperiam nemo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, soluta cupiditate? Consectetur, accusamus itaque. Autem totam ipsa tempore at, mollitia, animi harum exercitationem laudantium similique commodi, temporibus voluptatem suscipit in. Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veritatis porro blanditiis omnis excepturi suscipit nulla quasi, deserunt quas natus neque vel ipsam fugiat ab corporis magnam aut explicabo? Exercitationem? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis non quas et dolorum? Iure, dolorem assumenda laboriosam, fuga molestias amet consequuntur quibusdam maiores quia consequatur nobis quas soluta! Ipsum, aperiam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur mollitia doloribus quod aspernatur laborum fuga reiciendis beatae. Iusto officiis repudiandae possimus. Delectus esse perferendis cumque sunt earum? Quidem, possimus porro! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae molestiae illo officiis error repudiandae fugiat sit eos! Fugit facilis maiores maxime explicabo unde, laborum officia nihil, temporibus earum consequatur libero?</p>');
    })

    

    $('#visidanmisi').click(function() {

      $('#isi').empty().append('');
      // Mengisi tag html prifle tentang
      $('#isi').append(' <p data-aos="fade-up" >Consequuntur mollitia doloribus quod aspernatur laborum fuga reiciendis beatae. Iusto officiis repudiandae possimus. Delectus esse perferendis cumque sunt earum? Quidem, possimus porro! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae molestiae illo officiis error repudiandae fugiat sit eos! Fugit facilis maiores maxime explicabo unde, laborum officia nihil, temporibus earum consequatur libero?</p>');
      
    })

  });