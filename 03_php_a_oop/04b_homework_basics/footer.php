</div>
</article>
</main>

<aside class="pre-footer">
  <div class="container">
    <p>
      <strong>Zaujali sme Vás pre nový projekt?</strong>
      Jednoducho nám zavolajte alebo napíšte.
    </p>

    <?php include 'variables.php' ?>

    <ul class="menu personal">
      <li><i class="fa fa-phone"></i>
        <?php echo "<a href='tel:$contact_phone'>$contact_phone</a>"; ?>

      </li>
      <li><i class="fa fa-envelope"></i><a href="mailto:email@mailinator.com">email@mailinator.com</a></li>
    </ul>
  </div>
</aside>

<footer>
  <div class="container">
    <p class="logo">
      <strong>NIGHT</strong>FURY<i class="fa fa-fire"></i>
    </p>
    <p class="author">
      Návrh a design pripravil
      <?php echo "<a href='mailto:$contact_email'>$contact_email</a> " ?>

    </p>
    <ul class="menu nav-footer">
      <li><a href="index.html">Domov</a></li>
      <li><a href="portfolio.html">Portfólio</a></li>
      <li><a href="about.html">O nás</a></li>
      <li><a href="contact.html">Kontakt</a></li>
    </ul>
  </div>
</footer>

<!-- scripts -->
<script src="js/lightbox.js"></script>

</body>

</html>