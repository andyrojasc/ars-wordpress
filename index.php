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

    <section class="cards-section">
        <div class="container-fluid pt-5 pb-3 px-5 text-center">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-6 col-lg-4 px-1">
                    <div class="card card-01 mb-4  mx-auto">
                    <img class="card-img-top" src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Workshottps</h3>
                            <p class="card-text">From time to time, the ARS will offer Workshop Events for members to expand on their artistic techniques. Special workshop events will be planned throughout the upcoming months.</p>
                            <button type="button" class="btn btn-outline-danger text-uppercase ">learn more</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 px-1">
                    <div class="card card-02 mb-4 mx-auto">
                    <img class="card-img-top" src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Artists</h3>
                            <p class="card-text">Our members directory for artists profiles, view thumbnails of their work, info about what they do, read artist bio's and find contact information such as web addresses for specific members</p>
                            <button type="button" class="btn btn-outline-danger text-uppercase ">learn more</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 px-1">
                    <div class="card card-03 mx-auto">
                    <img class="card-img-top" src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title">Events</h3>
                            <p class="card-text">ARS offers fun and creative events throughout the year at the gallery and around Monteverde. Exhibitions, workshops, artist talks, and other events are always open to the public.</p>
                            <button type="button" class="btn btn-outline-danger text-uppercase ">learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="artist-section py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 px-0 px-lg-5">
                    <h2 class="pb-1">Who We Are</h2>
                    <h5 class="mb-4">Our mission is to promote art in Monteverde by 'Making Visual Art Visible.</h5>
                    <p>The ARS was founded in xxxx by a group of local artists who had a desire to share their expertise, knowledge, and enthusiasm for art. The Association has a broad range of talent from professional to novice. Members provide the ability to encourage, assist, develop, and exchange ideas and information in building on artistic skills. </p>
                    <p>Our community outreach programs help with this endeavor, and are always educational, child friendly and free to the general public. Our members are assisted with making their art visible by taking advantage of the many exhibit opportunities we offer in Monteverde. Our emphasis is to be a support group devoted to the enrichment of each members experience through the visual arts.</p>

                    <p>All meetings are free and open to the public. Visitors are encouraged and welcomed.</p>

                    <button type="button" class="btn btn-outline-danger text-uppercase ">SEND US A MESSAGE</button>
                </div>
            </div>
        </div>
    </section>

    <?php include("features-artist.php"); ?>

    <?php include("contact-us.php"); ?>
</div>

<?php get_footer(); ?>