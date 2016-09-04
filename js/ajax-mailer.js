$(function() {

	// Get the form.
	var form = $('#ajax-mailer1');
	var form2 = $('#ajax-mailer2');
	var form3 = $('#ajax-mailer3');
	var form4 = $('#ajax-mailer4');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');
      
			// Set the message text.
			var sucessMsg = $(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#phonenum').val('');

			// Close the form
			 $('#overlay').fadeOut('slow');
           $('#overlay-form1').fadeOut('slow');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Проблема в AJAX запросе! Мы занимаемся устранением проблемы! Вы можете позвонить нам!');
			}
		});

	});

	/*****************************************************CARD 2*******************************************************/

	// Set up an event listener for the contact form.
	$(form2).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form2).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form2).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#phonenum').val('');

			// Close the form
			 $('#overlay').fadeOut('slow');
           $('#overlay-form1').fadeOut('slow');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Проблема в AJAX запросе! Мы занимаемся устранением проблемы! Вы можете позвонить нам!');
			}
		});

	});


	/*****************************************************CARD 3*******************************************************/

	// Set up an event listener for the contact form.
	$(form3).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form3).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form3).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#phonenum').val('');

			// Close the form
			 $('#overlay').fadeOut('slow');
           $('#overlay-form1').fadeOut('slow');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Проблема в AJAX запросе! Мы занимаемся устранением проблемы! Вы можете позвонить нам!');
			}
		});

	});



	/*****************************************************CARD 4*******************************************************/

	// Set up an event listener for the contact form.
	$(form4).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form4).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form4).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#phonenum').val('');

			// Close the form
			 $('#overlay').fadeOut('slow');
           $('#overlay-form1').fadeOut('slow');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Проблема в AJAX запросе! Мы занимаемся устранением проблемы! Вы можете позвонить нам!');
			}
		});

	});


});
