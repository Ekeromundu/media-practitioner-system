<!DOCTYPE html>
<html>

<head>
    <title>Submit Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .star-rating {
            direction: rtl;
            display: inline-block;
            padding: 20px;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            color: #bbb;
            font-size: 20px;
            padding: 0;
            cursor: pointer;
        }

        .star-rating label:before {
            content: '★';
        }

        .star-rating input[type="radio"]:checked~label {
            color: #f2b600;
        }

        .star-rating input[type="radio"]:checked~label~label {
            color: #bbb;
        }

        .review-form-container {
            background-color: #f9f9f9;
            /* Light grey background color */
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 0 auto;
            max-width: 600px;
            border: 1px solid #ddd;
            /* Light border for subtle contrast */
        }

        .review-form-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            /* Darker text color for better readability */
        }

        .review-form-container .form-label {
            font-weight: bold;
            color: #444;
            /* Slightly darker label color */
        }

        .review-form-container .form-control {
            border-radius: 8px;
            border: 1px solid #ccc;
            /* Light border color */
            padding: 10px;
        }

        .review-form-container .btn-primary {
            background-color: #007bff;
            /* Primary button color */
            border-radius: 8px;
            padding: 10px 20px;
        }

        .review-form-container .btn-primary:hover {
            background-color: #0056b3;
            /* Darker shade for hover effect */
            border-color: #004494;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="review-form-container">
            <h1 class="mb-4 text-center">Submit Your Review</h1>

            @if ($errors->any())
            <div style="color:red">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <form action="{{ url('feedback/media/'.$id .'/'. $user_id.'/store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Review</label>
                    <textarea class="form-control" id="body" name="body" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" required /><label for="star5" title="5 stars">5 stars</label>
                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 stars">4 stars</label>
                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 stars">3 stars</label>
                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 stars">2 stars</label>
                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star">1 star</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>

</html>