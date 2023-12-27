document.addEventListener('DOMContentLoaded', function()
{
	var themeSwitch = document.getElementById('themeSwitch');

	themeSwitch.addEventListener('change', function()
	{
		document.body.classList.toggle('theme-clair');
	});
});