@extends('weblayout.websitelayout')
@section('weblay')
    <!-- header -->
<header class = "header">
    <div class = "head-body container-fluid" style="padding-top: 125px;">
      <div class = "head-body-content">
        <h6> <b>Welcome to </b></h6>
        <h1 class = "head-title">
             <b>AMIR TRADING CORPORATION</b>
        </h1>
        <p class = "text">
            a premium provider of high-quality towel products. We aim to enhance our customers’ daily...
        </p>
        <button type = "button" class = "btn" id="check">
          Read More
        </button>
      </div>

      <div class = "head-body-img">
        <img src = "assent/images/adasd.png" alt = "header image">
        <div class="home__shadow"></div>
      </div>
    </div>
  </header>
  <!-- end of header -->
  
  <section class = "trend">
    <div class = "container">
      <div class = "title">
        <h4>trending now</h4>
        <h2>best selling product</h2>
      </div>

      <div class = "trend-grid">
        <!-- item -->
        <div class = "trend-item">
          <img src = "assent/images/product/p3.png" alt = "best product">
          <div class = "trend-item-content">
            <h4>Turquoise Wash Gloves (2-Pack)</h4>
            <div class = "stars">
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "far fa-star"></i></span>
            </div>
            <span class = "chevron-icon">
              <i class = "fas fa-chevron-right"></i>
            </span>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "trend-item">
          <img src = "assent//images/product/bathrobe.png" alt = "best product">
          <div class = "trend-item-content">
            <h4>Terry Bathrobe For Both Men And Women</h4>
            <div class = "stars">
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "far fa-star"></i></span>
            </div>
            <span class = "chevron-icon">
              <i class = "fas fa-chevron-right"></i>
            </span>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "trend-item">
          <img src = "assent//images/product/p2.png" alt = "best product">
          <div class = "trend-item-content">
            <h4>Indulge in Luxury with our Set of 3 Towels</h4>
            <div class = "stars">
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "fas fa-star"></i></span>
              <span><i class = "far fa-star"></i></span>
            </div>
            <span class = "chevron-icon">
              <i class = "fas fa-chevron-right"></i>
            </span>
          </div>
        </div>
        <!-- end of item -->
      </div>
    </div>
  </section>
  <!-- end of trending product -->

  <div class = "underline"></div>

  <!-- featured product -->
  <section class = "featured">
    <div class = "container">
      <!-- item -->
      <div class = "featured-item">
        <div class = "featured-item-img">
          <img src = "assent/images/product/kitchen-towel.png" alt = "feature image">
        </div>
        <div class = "featured-item-content">
          <div class = "title">
            <h4>featured product </h4>
            <h2>White Kitchen Towel for Ultimate Cleaning Comfort</h2>
          </div>
          <p class = "text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
          </p>
          <div class = "featured-btns">
            <button type = "button" class = "btn" id="check">Explore</button>
          </div>
        </div>
      </div>
      <!-- end of item -->
      <!-- item -->
      <div class = "featured-item">
        <div class = "featured-item-img">
          <img src = "assent/images/product/baby-hud.jpg" alt = "feature image">
        </div>
        <div class = "featured-item-content">
          <div class = "title">
            <h4>featured product </h4>
            <h2>Gentle on Baby’s Skin, Ultra-Soft Babyhood Towel in Pink and White</h2>
          </div>
          <p class = "text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
          </p>
          <div class = "featured-btns">
            <button type = "button" class = "btn" id="check">Explore</button>
          </div>
        </div>
      </div>
      <!-- end of item -->
      <!-- item -->
      <div class = "featured-item">
        <div class = "featured-item-img">
          <img src = "assent/images/product/hair-dry.png" alt = "feature image">
        </div>
        <div class = "featured-item-content">
          <div class = "title">
            <h4>featured product </h4>
            <h2>Hair Drying Towel – 25x65cm </h2>
          </div>
          <p class = "text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
          </p>
          <div class = "featured-btns">
            <button type = "button" class = "btn" id="check">Explore</button>
          </div>
        </div>
      </div>
      <!-- end of item -->
      <!-- item -->
      <div class = "featured-item">
        <div class = "featured-item-img">
          <img src = "assent/images/product/towelf.png" alt = "feature image">
        </div>
        <div class = "featured-item-content">
          <div class = "title">
            <h4>featured product </h4>
            <h2>Black Elegance: 100% Cotton Embroidered Towel</h2>
          </div>
          <p class = "text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quasi consequatur veniam, veritatis necessitatibus rem voluptas pariatur doloremque id culpa, eveniet, ratione libero eos fuga.
          </p>
          <div class = "featured-btns">
            <button type = "button" class = "btn" id="check">Explore</button>
          </div>
        </div>
      </div>
      <!-- end of item -->
    </div>
  </section>
  <!-- end of featured product -->

  <!-- blog -->
  <section class = "blog">
    <div class = "container">
      <div class = "title">
        <h4>daily update</h4>
        <h2>latest blog</h2>
      </div>

      <div class = "blog-grid">
        <!-- item -->
        <div class = "blog-item">
          <div class = "blog-item-img">
            <img src = "assent/blog-img-1.jpg" alt = "blog image">
          </div>
          <div class = "blog-item-content">
            <a href = "#">creative ideas for decoration</a>
            <div>
              <span>january 20 | design | furniture</span>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "blog-item">
          <div class = "blog-item-img">
            <img src = "assent/blog-img-2.jpg" alt = "blog image">
          </div>
          <div class = "blog-item-content">
            <a href = "#">decorate your home with the most modern furnishings.</a>
            <div>
              <span>january 25 | design | furniture</span>
            </div>
          </div>
        </div>
        <!-- end of item -->
        <!-- item -->
        <div class = "blog-item">
          <div class = "blog-item-img">
            <img src = "assent/blog-img-3.jpg" alt = "blog image">
          </div>
          <div class = "blog-item-content">
            <a href = "#">furniture designs & contemporary art</a>
            <div>
              <span>january 28 | design | furniture</span>
            </div>
          </div>
        </div>
        <!-- end of item -->
      </div>
    </div>
  </section>
  <!-- end of blog -->

@endsection