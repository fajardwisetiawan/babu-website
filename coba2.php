<!DOCTYPE html>
<html>
<head>
	<title>Jam (Aktif) With JavaScript</title>
</head>
<body>
	<!-- Menampilkan Jam (Aktif) -->
	<input type='tel' id='tel' />
		<script type="text/javascript">

        var inputEl = document.getElementById('tel');
		var goodKey = '0123456789+ ';

		var checkInputTel = function(e) {
		var key = (typeof e.which == "number") ? e.which : e.keyCode;
		var start = this.selectionStart,
			end = this.selectionEnd;

		var filtered = this.value.split('').filter(filterInput);
		this.value = filtered.join("");

		/* Prevents moving the pointer for a bad character */
		var move = (filterInput(String.fromCharCode(key)) || (key == 0 || key == 8)) ? 0 : 1;
		this.setSelectionRange(start - move, end - move);
		}

		var filterInput = function(val) {
		return (goodKey.indexOf(val) > -1);
		}

		inputEl.addEventListener('input', checkInputTel);

		</script>
 
		<!-- Menampilkan Hari, Bulan dan Tahun -->
		<br>
		<!-- <script type='text/javascript'>

			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

		</script> -->
 
</body>
</html>