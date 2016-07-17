


	<!-- Content -->
	<div class="content">
		<!-- Banner -->
		<div class="banner">
			<div class="banner-top">
				Media Monitoring - Muvera
				<div class="btn btn-sm btn-orange">Learn More</div>
			</div>
			<div class="banner-bot">
			</div>
		</div>
		<div class="content-container">
			<!-- Search Config Section -->
			<form id="search-form" name="search-form">
				<div class="section-search">
					<h1 class="content-title">MEDIA</h1>
					<div id="search-container">
						<input type="text" class="search-keyword search-keyword-main" placeholder="+ Add Word" name="main-word">
						<input type="text" class="search-keyword search-keyword-tax tax1" placeholder="+ Add Word" name="first-tax">
						<input type="text" class="search-keyword search-keyword-tax tax2" placeholder="+ Add Word" name="second-tax">
						<input type="text" class="search-keyword search-keyword-tax tax3" placeholder="+ Add Word" name="third-tax">
						<input type="text" class="search-keyword search-keyword-tax tax4" placeholder="+ Add Word" name="fourth-tax">
					</div>
					<div class="get-time">
						<div id="datepicker-container">
							<div class="datepicker-from">
								<label for="from">From</label>
								<input type="date" class="from from-date" name="date-from">
							</div>
							<div class="datepicker-to">
								<label for="to">to</label>
								<input type="date" class="to to-date" name="date-to">
							</div>
						</div>
						<div id="timepicker-container">
							<div class="timepicker-from">
								<!--<label for="from">From</label>
								<input type="time" class="from from-time" name="time-from">-->
								<input type="number" class="from from-time" name="hour-from" placeholder="00" min="0" max="12" maxlength="2"> : <input type="number" class="from from-time" name="minute-from" placeholder="00" min="0" max="59" maxlength="2">
								<select name="period" class="from from-period" id="period-from">
									<option value="am" selected>AM</option>
									<option value="pm">PM</option>
								</select>
							</div>
							<div class="timepicker-to">
								<!--<label for="to">to</label>
								<input type="time" class="to to-time" name="time-to">-->
								<input type="number" class="to to-time" name="hour-to" placeholder="00" min="0" max="12" maxlength="2"> : <input type="number" class="to to-time" name="minute-to" placeholder="00" min="0" max="59" maxlength="2">
								<select name="period" class="to to-period" id="period-to">
									<option value="am" selected>AM</option>
									<option value="pm">PM</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="section-choice">
					<div class="btn-media-container">
						<div class="btn btn-media">
							<input id="CNNIdn" type="checkbox" name="media[]" value="cnnindo_data">
							<label for="CNNIdn">CNN Idn</label>
						</div>
						<div class="btn btn-media">
							<input id="Detik" type="checkbox" name="media[]" value="detik_data">
							<label for="Detik">Detik</label>
						</div>
						<div class="btn btn-media">
							<input id="Kompas" type="checkbox" name="media[]" value="kompas_data">
							<label for="Kompas">Kompas</label>
						</div>
						<div class="btn btn-media">
							<input id="Liputan6" type="checkbox" name="media[]" value="liputan6_data">
							<label for="Liputan6">Liputan6</label>
						</div>
						<div class="btn btn-media">
							<input id="Merdeka" type="checkbox" name="media[]" value="merdeka_data">
							<label for="Merdeka">Merdeka</label>
						</div>
						<div class="btn btn-media">
							<input id="Republika" type="checkbox" name="media[]" value="republika_data">
							<label for="Republika">Republika</label>
						</div>
						<div class="btn btn-media">
							<input id="Sindo" type="checkbox" name="media[]" value="sindonews_data">
							<label for="Sindo">Sindo</label>
						</div>
						<div class="btn btn-media">
							<input id="Tempo" type="checkbox" name="media[]" value="tempo_data">
							<label for="Tempo">Tempo</label>
						</div>
						<div class="btn btn-media">
							<input id="Tribun" type="checkbox" name="media[]" value="tribunnews_data">
							<label for="Tribun">Tribun</label>
						</div>
						<div class="btn btn-media">
							<input id="Viva" type="checkbox" name="media[]" value="viva_data">
							<label for="Viva">Viva</label>
						</div>
					</div>
					<div id="btn-generate" class="btn btn-orange btn-lg-rnd" onclick="search()">Generate Report</div>
				</form>
			</div>
			
