<?php get_header(); ?>
<div id="contenidoPagina">
    <section class="banner-section">
        <div class="background-img" style="background-image: 
    linear-gradient(
      rgba(51,51,51, 0.45), 
      rgba(51,51,51, 0.45)
    ),
    url(https://i.ytimg.com/vi/lusToov3pCI/maxresdefault.jpg);">
            <div class="intro-text">
                <h1 class="intro-heading">MAKING VISUAL ART VISIBLE</h1>
            </div>
        </div>
    </section>

    <section class="artist-section py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 px-0 px-lg-5">
                    <h2 class="pb-1">Artist Members</h2>
                    <h5 class="mb-4">Making Visual Art Visible</h5>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et massa quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et massa quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris lectus orci, placerat sed eros eget, luctus blandit sem. Cras quis lacus vitae dui congue porta a sed ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce quis orci accumsan risus pulvinar pellentesque. Sed ullamcorper</p>
                    <p class="pt-0"><strong>CONTACT US</strong></p>
                </div>
            </div>

            <div class="row">
                <div class="table-responsive">
                    <table class="table mt-3">
                        <thead class="bg-danger text-white">
                        <tr>
                            <th></th>
                            <th>Artist</th>
                            <th>Medium</th>
                            <th>Contact</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Photo"><img src="https://unsplash.it/1000/1100" height="100"/></td>
                            <td data-label="Name">Suzanne <br> Cruz</td>
                            <td data-label="Job">Artist, Photographer</td>
                            <td data-label="Contact">info@artist.com <br> (506) 1234-5678</td>
                        </tr>
                        <tr> 
                            <td data-label="Photo"><img src="https://unsplash.it/1000/1100" height="100"/></td>
                            <td data-label="Name">Vernon <br> Schmidt</td>
                            <td data-label="Job">Artist, Photographer</td>
                            <td data-label="Contact">info@artist.com <br> (506) 1234-5678</td>
                        </tr>
                        <tr>
                            <td data-label="Photo"><img src="https://unsplash.it/1000/1100" height="100"/></td>
                            <td data-label="Name">Bernice <br> Brown</td>
                            <td data-label="Job">Artist, Photographer</td>
                            <td data-label="Contact">info@artist.com <br> (506) 1234-5678</td>
                        </tr>
                        <tr>
                            <td data-label="Photo"><img src="https://unsplash.it/1000/1100" height="100"/></td>
                            <td data-label="Name">Thomas <br> Shelton</td>
                            <td data-label="Job">Artist, Photographer</td>
                            <td data-label="Contact">info@artist.com <br> (506) 1234-5678</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php include("features-artist.php"); ?>

    <?php include("contact-us.php"); ?>
</div>

<?php get_footer(); ?>
