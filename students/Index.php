<?php
error_reporting(0);
require_once "Formulator.php";

?>
<!DOCTYPE html>
<html>
<head>
<title>Student Form</title>
</head>
<body>
<h1>Student Form</h1>
<?php
$formdata = '{
    "action": "savedetails.php",
    "method": "POST",
    "inputs": [
        {
            "label": {
                "content": "Name *: "

            },

            "name": "name",
            "type": "text",
            "required":"true"
        },
        {
            "label": {
                "content": "Father Name*: "
            },

            "name": "f_name",
            "type": "text",
            "required":"true"

        },
         {
            "label": {
                "content": "Email*: "
            },

            "name": "email",
            "type": "email",
            "required":"true"

        },
         {
            "label": {
                "content": "DOB*: "
            },

            "name": "dob",
            "type": "date",
            "required":"true"

        },
         {
            "label": {
                "content": "10th %*: "
            },

            "name": "perc_10",
            "type": "text",
            "required":"true"

        },
         {
            "label": {
                "content": "12th %*: "
            },

            "name": "percentage_12",
            "type": "text",
            "required":"true"

        },
         {
            "label": {
                "content": "CGPA*: "
            },

            "name": "cgpa",
            "type": "text",
            "required":"true"

        },
        
        {
            "label": {
                "content": "Department*: "
            },
            "options": {
                "value": "CSE",
                "label":"IT"
            },

            "name": "department",
            "type": "select"

        },


        {
            "id": "submit",
            "name": "submit",
            "type": "submit",
            "value": "Submit"
        }
    ]
}';
//create the form
$formulator = new Formulator();
echo $formulator->formify($formdata);
?>

</body>
</html>