document.getElementById('yourFormId').addEventListener('submit', function(event) {
    let isValid = true;
    const requiredFields = [
        'name', 'company_name', 'email', 'telephone', 'collect_from_city',
        'collect_from_country', 'deliver_to_city', 'deliver_to_country', 'method',
        'total_packages', 'package_1', 'commodity', 'other_details'
    ];

    requiredFields.forEach(function(field) {
        const input = document.getElementsByName(field)[0];
        if (!input.value) {
            isValid = false;
            input.style.borderColor = 'red';
        } else {
            input.style.borderColor = '';
        }
    });

    if (!isValid) {
        event.preventDefault();
        alert('Please fill in all the required fields.');
    }
});
