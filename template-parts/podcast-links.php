<?php $postid = get_the_ID(); ?>

<?php
  if (in_category('10minutes', $postid)) { ?>
    <a href="https://podcasts.apple.com/us/podcast/10-minutes-to-being-boss/id1378315174?uo=4" target="_blank"><i class="fab fa-apple"></i></a>
    <a href="https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5idXp6c3Byb3V0LmNvbS8xNzQ1NDUucnNz" target="_blank"><i class="fab fa-google-play"></i></a>
    <a href="https://soundcloud.com/beingboss/sets/10-minutes-to-being-boss" target="_blank"><i class="fab fa-soundcloud"></i></a>
    <a href="https://open.spotify.com/show/7Fixdr6LDXcuJSLqWuvcAP" target="_blank"><i class="fab fa-spotify"></i></a>
    <a href="https://www.stitcher.com/podcast/being-boss-2/10-minutes-to-being-boss" target="_blank"><i class="stitcher"></i></a>
    <a href="https://music.amazon.com/podcasts/8091562a-702b-4da2-b406-9f2466359d33/10-Minutes-to-Being-Boss" target="_blank"><i class="fab fa-amazon"></i></a>
    <a href="http://feeds.feedburner.com/10MinutesToBeingBoss" target="_blank"><i class="fas fa-rss"></i></a>
  <?php } else if (in_category('making-a-business', $postid)) { ?>
    <a href="https://podcasts.apple.com/us/podcast/making-a-business/id1356665589?uo=4" target="_blank"><i class="fab fa-apple"></i></a>
    <a href="https://podcasts.google.com/feed/aHR0cHM6Ly93d3cuYnV6enNwcm91dC5jb20vMTYxMjgyLnJzcw" target="_blank"><i class="fab fa-google-play"></i></a>
    <a href="https://soundcloud.com/beingboss/sets/making-a-business" target="_blank"><i class="fab fa-soundcloud"></i></a>
    <a href="https://open.spotify.com/show/6gp5o7kjGuU8bH7eYFanC2" target="_blank"><i class="fab fa-spotify"></i></a>
    <a href="https://www.stitcher.com/podcast/being-boss-2/making-a-business" target="_blank"><i class="stitcher"></i></a>
    <a href="https://music.amazon.com/podcasts/470850b6-f8f0-447d-ade5-f19ab6c70a57/Making-a-Business" target="_blank"><i class="fab fa-amazon"></i></a>
    <a href="http://feeds.feedburner.com/MakingABusinessPodcast" target="_blank"><i class="fas fa-rss"></i></a>
  <?php } else if (in_category('minisodes', $postid)) {
    //do nothing
  } else { ?>
      <a href="https://podcasts.apple.com/us/podcast/being-boss-mindset-habits-tactics-lifestyle-for-creative/id956310359" target="_blank"><i class="fab fa-apple"></i></a>
      <a href="https://podcasts.google.com/feed/aHR0cHM6Ly93d3cuYnV6enNwcm91dC5jb20vMzc3MDIucnNz" target="_blank"><i class="fab fa-google-play"></i></a>
      <a href="https://soundcloud.com/beingboss" target="_blank"><i class="fab fa-soundcloud"></i></a>
      <a href="https://open.spotify.com/show/0tRmU2Ipy2raYtjlz0Dz7w" target="_blank"><i class="fab fa-spotify"></i></a>
      <a href="https://www.stitcher.com/podcast/being-boss" target="_blank"><i class="stitcher"></i></a>
      <a href="http://tun.in/pi30v" target="_blank"><i class="tunein"></i></a><a href="https://music.amazon.com/podcasts/a7c77495-d701-4d3d-a250-155b8a1e959d/Being-Boss-Mindset-Habits-Tactics-and-Lifestyle-for-Creative-Entrepreneurs" target="_blank"><i class="fab fa-amazon"></i></a>
      <a href="http://feeds.feedburner.com/BeingBossPodcast" target="_blank"><i class="fas fa-rss"></i></a>
  <?php }
?>
