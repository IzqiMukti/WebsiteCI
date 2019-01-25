<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
<style>
    .wrapper {
  /* The height needs to be set to a fixed value for the effect to work.
   * 100vh is the full height of the viewport. */
  height: 100vh;
  /* The scaling of the images would add a horizontal scrollbar, so disable x overflow. */
  overflow-x: hidden;
  /* Enable scrolling on the page. */
  overflow-y: auto;
  /* Set the perspective to 2px. This is essentailly the simulated distance from the viewport to transformed objects.*/
  perspective: 2px;
}

.section {
  /* Needed for children to be absolutely positioned relative to the parent. */
  position: relative;
  /* The height of the container. Must be set, but it doesn't really matter what the value is. */
  height: 100vh;

  /* For text formatting. */
  display: flex;
  align-items: center;
  justify-content: center;
  color: black;
  text-shadow: 0 0 1px #000;
}

.parallax::after {
  /* Display and position the pseudo-element */
  content: " ";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  /* Move the pseudo-element back away from the camera,
   * then scale it back up to fill the viewport.
   * Because the pseudo-element is further away, it appears to move more slowly, like in real life. */
  transform: translateZ(-1px) scale(1.5);
  /* Force the background image to fill the whole element. */
  background-size: 100%;
  /* Keep the image from overlapping sibling elements. */
  z-index: -1;
}

/* The styling for the static div. */
.static {
  background: #C0FFFF66;
}

/* Sets the actual background images to adorable kitties. This part is crucial. */
.bg1::after {
background-image: url(<?=base_url()?>assets/image/tus.jpg);
}

.bg2::after {
background-image: url(<?=base_url()?>assets/image/kaktus.jpg);
}
</style>
</head>
<body>
<main class="wrapper">
  <section class="section parallax bg1">
    <h1></h1>
  </section>
  <section class="section static">
    <h1>Kaktus adalah nama yang diberikan untuk anggota tumbuhan berbunga famili Cactaceae.</h1>
  </section>
  <section class="section parallax bg2">
    <h1></h1>
  </section>
</main>
<div class="panel-footer ">
                 <a href="<?php echo site_url('Login/loginUser') ?>" class="btn btn-link">Click Me!</a>
			</div>
</body>
</html>