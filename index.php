<?php require_once 'head.php'; ?>
<body>
<?php require_once 'header.php'; ?>

<!-- Hero -->
<section class="hero" id="hero">
	<div class="hero-bg"></div>
	<div class="container hero-grid">
		<div class="hero-content">
			<p class="section-label">Since 2015</p>
			<h1>Professional <em>Mastering</em> for Labels &amp; Artists</h1>
			<p>Mastering &amp; STEM-mastering for labels, distributors and artists. Over 800 releases, flexible pricing, free demo.</p>
			<div class="hero-actions">
				<a href="#contact" class="btn btn-primary">Free Demo</a>
				<a href="#prices" class="btn btn-ghost">View Prices</a>
			</div>
			<div class="hero-stats">
				<div class="hero-stat">
					<strong>800+</strong>
					<span>Releases mastered</span>
				</div>
				<div class="hero-stat">
					<strong>5000+</strong>
					<span>Tracks processed</span>
				</div>
				<div class="hero-stat">
					<strong>100+</strong>
					<span>Releases per year</span>
				</div>
			</div>
		</div>
		<div class="waveform-wrap">
			<div class="waveform-label">Live preview</div>
			<div class="waveform" id="waveform" aria-hidden="true"></div>
			<div class="hero-player">
				<iframe scrolling="no" frameborder="no" allow="autoplay"
					src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/510395988&amp;color=%236ad400&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;show_teaser=false&amp;visual=false"></iframe>
			</div>
		</div>
	</div>
</section>

<!-- About -->
<section class="section" id="about">
	<div class="container">
		<p class="section-label">Who we are</p>
		<h2 class="section-title">Trusted by labels worldwide</h2>
		<p class="section-desc">Hi! I'm Sledger, founder of this mastering service since 2015. We handle 100+ releases per year across genres from Jazz to Hard Techno — with 1–3 tracks daily in Beatport Top.</p>
		<div class="features-grid">
			<div class="feature-card">
				<div class="feature-icon"><i class="fa fa-bolt"></i></div>
				<h3>Fast turnaround</h3>
				<p>Mastering in 1–2 business days. Priority processing for label partners.</p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa fa-sliders"></i></div>
				<h3>Free revisions</h3>
				<p>Up to 2 free revisions included. We work until you're satisfied.</p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa fa-headphones"></i></div>
				<h3>Free demo</h3>
				<p>Try our sound before you pay — full MP3 or partial preview available.</p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa fa-building"></i></div>
				<h3>Label pricing</h3>
				<p>Regular per-order or monthly plans. Flexible cooperation for any release rate.</p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa fa-globe"></i></div>
				<h3>Universal sound</h3>
				<p>Optimized for clubs, headphones, phones — consistent on every system.</p>
			</div>
			<div class="feature-card">
				<div class="feature-icon"><i class="fa fa-music"></i></div>
				<h3>All genres</h3>
				<p>Techno, House, Trance, DnB and more. 8 years of daily experience.</p>
			</div>
		</div>
	</div>
</section>

<!-- Services -->
<section class="section" id="services">
	<div class="container">
		<p class="section-label">What we do</p>
		<h2 class="section-title">Our services</h2>
		<p class="section-desc">Click a service to view source file requirements and checklists.</p>
		<div class="services-grid">
			<article class="service-card">
				<div class="service-card-image">
					<img src="images/why-us/mastering.jpg" alt="Mastering">
					<div class="overlay"></div>
				</div>
				<div class="service-card-body">
					<h3>Mastering</h3>
					<p>Final make-up for your tracks. 2 free revisions included. Working time: 1–2 business days.</p>
					<a href="#modal-01" class="service-card-link">View checklist <i class="fa fa-arrow-right"></i></a>
				</div>
			</article>
			<article class="service-card">
				<div class="service-card-image">
					<img src="images/why-us/stem-mastering.jpg" alt="STEM-Mastering">
					<div class="overlay"></div>
				</div>
				<div class="service-card-body">
					<h3>Stem-Mastering</h3>
					<p>Process instrument groups separately. Less time than mixing, preserves your vision. 2–3 business days.</p>
					<a href="#modal-02" class="service-card-link">View checklist <i class="fa fa-arrow-right"></i></a>
				</div>
			</article>
			<article class="service-card">
				<div class="service-card-image">
					<img src="images/why-us/mixing.jpg" alt="Mixing">
					<div class="overlay"></div>
				</div>
				<div class="service-card-body">
					<h3>Mixing</h3>
					<p>Full mix when placement and balance need professional attention. Result shown with mastering. 3–4 days.</p>
					<a href="#modal-03" class="service-card-link">View checklist <i class="fa fa-arrow-right"></i></a>
				</div>
			</article>
		</div>
	</div>
</section>

<!-- Modals -->
<div id="modal-01" class="popup-modal mfp-hide">
	<div class="description-box">
		<h3>Mastering: source check list</h3>
		<p>Before sending, please make sure your files meet the requirements below.</p>
		<ol>
			<li><strong>WAV PCM file, at least 24bit / 44100 kHz.</strong> Do not send files converted from MP3.</li>
			<li><strong>Output signal approx. 12db RMS, peaks not exceeding -6 db.</strong> Best range: peaks -4 to -6 db, RMS -13 to -11 db.</li>
			<li><strong>Master bus plugins off or in BYPASS.</strong> Soft limiting without aggressive parameters is allowed.</li>
			<li><strong>Pack WAV in zip, upload to file-sharing.</strong> Send link to sledgermastering [at] gmail [dot] com with subject "Artist name – mastering" or upload via our website. Include track BPM.</li>
		</ol>
	</div>
	<div class="link-box"><a href="#" class="popup-modal-dismiss">Close</a></div>
</div>

<div id="modal-02" class="popup-modal mfp-hide">
	<div class="description-box">
		<h4>Stem-mastering — group list</h4>
		<ul>
			<li>01_KICK, 02_Bass, 03_Sub-bass, 04_Snares-Claps, 05_Hats+Crashes</li>
			<li>06_Percussion, 07_LowPads, 08_MidPads+Leads, 09_HiLeads</li>
			<li>10_MainMelody, 11_Effects, 12_Other_tracks</li>
		</ul>
		<p>Include your mixed version in the archive if possible.</p>
		<h4>File requirements</h4>
		<ol>
			<li><strong>All groups: WAV PCM 24bit / 44100 kHz.</strong> Intuitive filenames (e.g. "01.Bass.wav").</li>
			<li><strong>Effects/plugins off</strong> except automation and essential character effects (mark in filename).</li>
			<li><strong>Output -4 to -6 db.</strong> Less signal is always better.</li>
			<li><strong>Master bus plugins off.</strong> Soft limiter allowed.</li>
			<li><strong>Reference tracks</strong> (2–3) optional but helpful.</li>
			<li><strong>Pack in zip, send link</strong> with subject "Artist name – STEM". Include BPM and your version.</li>
		</ol>
	</div>
	<div class="link-box"><a href="#" class="popup-modal-dismiss">Close</a></div>
</div>

<div id="modal-03" class="popup-modal mfp-hide">
	<div class="description-box">
		<h4>Mixing: source check list</h4>
		<ol>
			<li><strong>Each instrument exported as WAV PCM 24bit / 44100 kHz.</strong> Separate files preferred. Intuitive filenames.</li>
			<li><strong>Effects/plugins off</strong> except automation and essential effects (mark in filename).</li>
			<li><strong>Output -4 to -6 db.</strong></li>
			<li><strong>Master bus plugins off.</strong> Soft limiter allowed.</li>
			<li><strong>Pack in zip, send link</strong> with subject "Artist name – mixing". Include BPM and reference tracks.</li>
		</ol>
	</div>
	<div class="link-box"><a href="#" class="popup-modal-dismiss">Close</a></div>
</div>

<!-- Prices -->
<?php require_once 'inc/pricing.php'; ?>

<!-- Samples -->
<section class="section" id="examples">
	<div class="container">
		<p class="section-label">Hear the difference</p>
		<h2 class="section-title">Before &amp; after samples</h2>
		<p class="section-desc">Genre-sorted examples on SoundCloud. More on <a target="_blank" href="https://soundcloud.com/sledgermastering">our SoundCloud page</a>.</p>

		<div class="samples-featured">
			<h3>Techno &amp; Hard Techno</h3>
			<p><strong>Townsend — Nobody Likes Townzy</strong> · Released on <a target="_blank" href="https://www.beatport.com/release/nobody-likes-townzy-ep/2257888">Dreizehn Schallplatten</a></p>
			<div class="compare-players">
				<div class="compare-player before">
					<label>Before</label>
					<iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/510395826&amp;color=%23f87171&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;show_teaser=false"></iframe>
				</div>
				<div class="compare-player after">
					<label>After</label>
					<iframe scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/510395988&amp;color=%236ad400&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false&amp;show_teaser=false"></iframe>
				</div>
			</div>
			<div class="playlist-links">
				<a class="btn btn-ghost btn-sm" target="_blank" rel="nofollow" href="https://soundcloud.com/sledgermastering/sets/mastering-examples-hard-techno">Techno &amp; Hard Techno</a>
				<a class="btn btn-ghost btn-sm" target="_blank" rel="nofollow" href="https://soundcloud.com/sledgermastering/sets/mastering-examples-tech">Tech &amp; Minimal</a>
				<a class="btn btn-ghost btn-sm" target="_blank" rel="nofollow" href="https://soundcloud.com/sledgermastering/sets/house-mastering">House / Melodic</a>
				<a class="btn btn-ghost btn-sm" target="_blank" rel="nofollow" href="https://soundcloud.com/sledgermastering/sets/mastering-examples-trance">Trance</a>
				<a class="btn btn-ghost btn-sm" target="_blank" rel="nofollow" href="https://soundcloud.com/sledgermastering/sets/mastering-examples-drumnbass">Drum'n'bass</a>
			</div>
		</div>
	</div>
</section>

<!-- Terms -->
<section class="section" id="terms">
	<div class="container">
		<p class="section-label">How it works</p>
		<h2 class="section-title">Terms &amp; payment</h2>
		<div class="terms-grid">
			<div class="terms-card">
				<h3>How to place an order</h3>
				<ol>
					<li>Choose your tariff</li>
					<li>Check source file requirements</li>
					<li>Upload tracks to file-sharing</li>
					<li>Send us the download link</li>
					<li>Receive demo result</li>
					<li>Make payment if satisfied</li>
					<li>Download full version</li>
				</ol>
				<blockquote>After successful payment you'll be redirected to our thank-you page with a direct download link.</blockquote>
			</div>
			<div class="terms-card">
				<h3>Payment</h3>
				<p>We send a PDF invoice with a private link to the bePaid authorization page. Payment is SSL-protected, verified by Visa and MasterCard Secure Code. Visa, MasterCard, GPay accepted.</p>
				<p>Card payments are processed through the <a href="https://bepaid.by/kak-oplatit" target="_blank" rel="noopener noreferrer">bePaid</a> electronic payment system. The bePaid payment page meets all data transmission security requirements (PCI DSS Level 1). All confidential data is stored in encrypted form and is highly resistant to unauthorized access. Access to authorization pages is provided using a protocol that ensures secure data transmission over the Internet (SSL/TLS).</p>
				<p lang="ru">Платежи по банковским картам осуществляются через систему электронных платежей <a href="https://bepaid.by/kak-oplatit" target="_blank" rel="noopener noreferrer">bePaid</a>. Платежная страница bePaid отвечает всем требованиям безопасности передачи данных (PCI DSS Level 1). Все конфиденциальные данные хранятся в зашифрованном виде и максимально устойчивы к взлому. Доступ к авторизационным страницам осуществляется с использованием протокола, обеспечивающего безопасную передачу данных в Интернете (SSL/TLS).</p>
				<blockquote>Prices are calculated per National Bank of Belarus exchange rates. Payments are processed in BYN; your card is debited in your local currency.</blockquote>
			</div>
		</div>
		<div class="terms-links">
			<a target="_blank" href="/pub-offer/pub-offer-eng.pdf">Public offer (PDF)</a>
			<a target="_blank" href="/pub-offer/Personal_data_ENG.pdf">Personal data processing</a>
		</div>
	</div>
</section>

<!-- Clients -->
<section class="section" id="clients">
	<div class="container">
		<p class="section-label">Partners</p>
		<h2 class="section-title">Our happy clients</h2>
		<div class="clients-grid">
			<div class="client-card">
				<div class="client-logo"><img src="images/partners/13.png" alt="Dreizehn Schallplatten"></div>
				<h3>Dreizehn Schallplatten</h3>
				<p>Techno / Hard Techno label</p>
				<ul class="client-social">
					<li><a target="_blank" rel="nofollow" href="https://www.facebook.com/DreizehnSchallplatten/"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://soundcloud.com/dreizehn_schallplatten"><i class="fa fa-soundcloud"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://www.beatport.com/label/dreizehn-schallplatten/59568"><img class="fa" src="/images/btprt.png" alt="Beatport"></a></li>
				</ul>
			</div>
			<div class="client-card">
				<div class="client-logo"><img src="images/partners/btr.png" alt="Betrieb Records"></div>
				<h3>Betrieb Records</h3>
				<p>Techno / Minimal label &amp; Distribution</p>
				<ul class="client-social">
					<li><a target="_blank" rel="nofollow" href="https://www.facebook.com/BetriebRecords/"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://soundcloud.com/betriebrecords"><i class="fa fa-soundcloud"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://www.beatport.com/label/betrieb-records/50936"><img class="fa" src="/images/btprt.png" alt="Beatport"></a></li>
				</ul>
			</div>
			<div class="client-card">
				<div class="client-logo"><img src="images/partners/evo.png" alt="Evosonic"></div>
				<h3>Evosonic</h3>
				<p>Evosonic Radio / Records</p>
				<ul class="client-social">
					<li><a target="_blank" rel="nofollow" href="https://www.evosonic.de/evosonic-records/"><i class="fa fa-globe"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://facebook.com/evosonicrecords.official/"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://soundcloud.com/evosonicschmidt"><i class="fa fa-soundcloud"></i></a></li>
				</ul>
			</div>
			<div class="client-card">
				<div class="client-logo"><img src="images/partners/ltf.png" alt="Louder Than Famous"></div>
				<h3>Louder Than Famous</h3>
				<p>Record Label &amp; Distribution</p>
				<ul class="client-social">
					<li><a target="_blank" rel="nofollow" href="http://www.louder-than-famous.com/"><i class="fa fa-globe"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://www.facebook.com/louderthanfamous/"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://soundcloud.com/louderthanfamous"><i class="fa fa-soundcloud"></i></a></li>
				</ul>
			</div>
			<div class="client-card">
				<div class="client-logo"><img src="images/partners/waud.png" alt="Waitaudio"></div>
				<h3>Waitaudio</h3>
				<p>Deep &amp; Progressive House</p>
				<ul class="client-social">
					<li><a target="_blank" rel="nofollow" href="https://www.facebook.com/waitaudio/"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://soundcloud.com/waitaudio"><i class="fa fa-soundcloud"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://www.beatport.com/label/waitaudio/50553"><img class="fa" src="/images/btprt.png" alt="Beatport"></a></li>
				</ul>
			</div>
			<div class="client-card">
				<div class="client-logo"><img src="images/partners/amr.png" alt="Assorted Music Records"></div>
				<h3>Assorted Music Records</h3>
				<p>Film &amp; music shop</p>
				<ul class="client-social">
					<li><a target="_blank" rel="nofollow" href="https://assorted-music.com/de/"><i class="fa fa-globe"></i></a></li>
					<li><a target="_blank" rel="nofollow" href="https://soundcloud.com/assortedmusicrecords"><i class="fa fa-soundcloud"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- Testimonials -->
<section class="section" id="testimonials">
	<div class="container">
		<p class="section-label">Reviews</p>
		<h2 class="section-title">What clients say</h2>
		<div class="testimonials-slider">
			<div class="testimonial-track" id="testimonial-track">
				<div class="testimonial-slide">
					<div class="testimonial-card">
						<p>Highly recommended these service! Great job, nice and smooth!</p>
						<div class="testimonial-author">
							<img src="images/avatars/avatar-1.jpg" alt="">
							<div><div class="name">Deersky</div><div class="role">Head of Soundteller records</div></div>
						</div>
					</div>
				</div>
				<div class="testimonial-slide">
					<div class="testimonial-card">
						<p>Good mastering engineer. Our cooperation lasts about a year. Flexible price policy and individual approach to each track. Quality as at any master studios.</p>
						<div class="testimonial-author">
							<img src="images/avatars/avatar-2.jpg" alt="">
							<div><div class="name">Marko Schwarzmann</div><div class="role">Dreizehn Schallplatten / Betrieb Records</div></div>
						</div>
					</div>
				</div>
				<div class="testimonial-slide">
					<div class="testimonial-card">
						<p>Sledger Mastering provides great quality masters at reasonable costs. Customer service is awesome — speed and extraordinary sound quality. Full support!</p>
						<div class="testimonial-author">
							<img src="images/avatars/avatar-3.jpg" alt="">
							<div><div class="name">Michael Kotapski</div><div class="role">Louder Than Famous Label</div></div>
						</div>
					</div>
				</div>
				<div class="testimonial-slide">
					<div class="testimonial-card">
						<p>The first conversation I realized that Sledger is a very responsible man. High quality product. I will work with that person further!</p>
						<div class="testimonial-author">
							<img src="images/avatars/avatar-5.jpg" alt="">
							<div><div class="name">Gordey Tsukanov</div><div class="role">J00F | FSOE | Perfecto Records</div></div>
						</div>
					</div>
				</div>
				<div class="testimonial-slide">
					<div class="testimonial-card">
						<p>High quality mastering engineer! Strongly recommend! Will be back again for sure!</p>
						<div class="testimonial-author">
							<img src="images/avatars/avatar-6.jpg" alt="">
							<div><div class="name">Evgeny Lebedev</div><div class="role">Coldharbour | Black Hole | Sunstate</div></div>
						</div>
					</div>
				</div>
				<div class="testimonial-slide">
					<div class="testimonial-card">
						<p>Sledger is fast and still offers quality. Open to all genres. Due to currency differences, it's affordable for us — Evosonic Records wouldn't exist without this partnership.</p>
						<div class="testimonial-author">
							<img src="images/avatars/avatar-7.jpg" alt="">
							<div><div class="name">Chris Maico Schmidt</div><div class="role">Evosonic radio | Evosonic records</div></div>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonial-dots">
				<button class="testimonial-dot active" aria-label="Slide 1"></button>
				<button class="testimonial-dot" aria-label="Slide 2"></button>
				<button class="testimonial-dot" aria-label="Slide 3"></button>
				<button class="testimonial-dot" aria-label="Slide 4"></button>
				<button class="testimonial-dot" aria-label="Slide 5"></button>
				<button class="testimonial-dot" aria-label="Slide 6"></button>
			</div>
		</div>
	</div>
</section>

<!-- Contact -->
<section class="section" id="contact">
	<div class="container">
		<p class="section-label">Get in touch</p>
		<h2 class="section-title">Contact us</h2>
		<div class="contact-grid">
			<div class="contact-form-wrap">
				<form class="contact-form" name="contactForm" id="contactForm" method="post" action="">
					<fieldset>
						<div class="form-row">
							<div class="form-group">
								<label for="contactName">Name</label>
								<input name="contactName" type="text" id="contactName" placeholder="Your name" minlength="2" required>
							</div>
							<div class="form-group">
								<label for="contactEmail">Email</label>
								<input name="contactEmail" type="email" id="contactEmail" placeholder="you@label.com" required>
							</div>
						</div>
						<div class="form-group">
							<label for="contactSubject">Subject</label>
							<input name="contactSubject" type="text" id="contactSubject" placeholder="Order / question">
						</div>
						<div class="form-group">
							<label for="contactMessage">Message</label>
							<textarea name="contactMessage" id="contactMessage" placeholder="Tell us about your project..." rows="6" required></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Send message</button>
						<div id="submit-loader">Sending...</div>
					</fieldset>
				</form>
				<div id="message-warning"></div>
				<div id="message-success">Your message was sent, thank you!</div>
			</div>
			<div class="contact-info">
				<h3>Official</h3>
				<div class="info-block">
					<span>Individual entrepreneur: Nekrasov Dmitriy Yuryevich</span>
					<span>Reg.No: 192778096 from 29.01.2018</span>
					<span>Taxpayer ID: 192778096</span>
					<span>Working 24/7 · Orders: business days 8:00–23:00 (GMT+3)</span>
				</div>
				<h3>Address</h3>
				<div class="info-block">
					<span>291-32 Aerodromnaya str., Minsk, Belarus 220028</span>
					<span>Account: BY76 MTBK 3013 0001 0933 0007 6047</span>
					<span>JSC MTBank, Minsk, Belarus</span>
				</div>
				<h3>Contacts</h3>
				<div class="info-block">
                    <span>Email: <a href="mailto:sledgermastering@gmail.com">sledgermastering@gmail.com</a></span>
                    <span>Facebook: <a rel="nofollow" href="https://fb.com/sledgermastering">sledgermastering</a></span>
					<span>SoundCloud: <a rel="nofollow" href="https://soundcloud.com/sledgermastering">sledgermastering</a></span>
					<span>Instagram: <a rel="nofollow" href="https://www.instagram.com/sledger.music">sledger.music</a></span>
					<span>Viber: <a rel="nofollow" href="viber://chat/?number=+375291129746">+375 29 112 97 46</a></span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php require_once 'footer.php'; ?>
</body>
</html>
