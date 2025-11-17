<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column; /* Arrange items vertically */
            align-items: center;    /* Center items horizontally */
            margin-top: 50px;       /* Add some space from the top */
        }

        .profile-image-container {
            width: 150px;  /* Set a fixed width for the container */
            height: 150px; /* Set a fixed height for the container */
            border-radius: 50%; /* Makes the container circular */
            overflow: hidden;   /* Hides anything outside the circle */
            border: 1px solid #ccc; /* Optional: A light border around the circle */
            display: flex; /* Use flexbox to center the image inside */
            justify-content: center;
            align-items: center;
            margin-bottom: 30px; /* Space between image and data */
        }

        .profile-image {
            width: 100%; /* Make the image fill its circular container */
            height: 100%;
            object-fit: cover; /* Ensures the image covers the area without distortion */
            /*
             * If you don't have a specific image, you could use a placeholder:
             * background-color: #f0f0f0;
             * border-radius: 50%;
             */
        }

        .profile-data {
            width: 80%; /* Adjust width as needed */
            max-width: 400px; /* Max width for readability */
            display: flex;
            flex-direction: column;
            gap: 15px; /* Space between each data item */
        }

        .data-item {
            display: flex; /* Use flexbox for label and value on the same line */
            align-items: center; /* Vertically align items */
            background-color: #f0f0f0; /* Light gray background for the "box" */
            padding: 10px 15px;
            border-radius: 5px; /* Slightly rounded corners for the boxes */
        }

        .data-label {
            font-weight: bold;
            flex: 1; /* Allows the label to take available space */
            color: #333;
        }

        .data-value {
            flex: 2; /* Allows the value to take more space than the label */
            text-align: right; /* Align value to the right */
            color: #555;
        }
    </style>
</head>
<body>

    <div class="profile-image-container">
        <img src="{{ asset('images/gray-photo-placeholder-icon-design-ui-vector.jpg') }}" alt="Profile Picture" class="profile-image">
    </div>

    <div class="profile-data">
        <div class="data-item">
            <span class="data-label">Nama</span>
            <span class="data-value">{{ $nama }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">NPM</span>
            <span class="data-value">{{ $npm }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Kelas</span>
            <span class="data-value">{{ $kelas }}</span>
        </div>
    </div>

</body>
</html>