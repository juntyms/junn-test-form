<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        {{ Form::open(['route'=>'postTest','class'=>'form-horizontal']) }}
            <div class="form-group">
                <label for="wallet_address">Wallet Address</label>
                <div class="col-md-10">
                    {{ Form::Text('wallet_address',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <label for="shirt_size">Shirt Size</label>
                <div class="col-md-10">
                    {{ Form::Text('shirt_size',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <label for="hoodie_size">Hoodie Size</label>
                <div class="col-md-10">
                    {{ Form::text('hoodie_size',null, ['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <label for="alias">Alias</label>
                <div class="col-md-10">
                    {{ Form::text('alias',null, ['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <label for="shipping_address">Shipping Address</label>
                <div class="col-md-10">
                    {{ Form::textarea('shipping_address',null, ['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="col-md-10">
                    {{ Form::text('email',null,['class'=>'form-control']) }}
                </div>
            </div>            
            <button class="btn btn-success mt-3"> Save</button>
        {{ Form::close() }}
    </div>
</body>
</html>