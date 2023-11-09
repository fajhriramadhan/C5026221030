<!DOCTYPE html>
<html lang="en">
<head>
  <title>BS4-BUTTONS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Button Styles</h2>
  <button type="button" class="btn">Basic</button>
  <button type="button" class="btn-primary">Primary</button>
  <button type="button" class="btn-secondary">Secondary</button>
  <button type="button" class="btn-success">Success</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button>
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-dark">Dark</button>
  <button type="button" class="btn btn-light">Light</button>
  <button type="button" class="btn btn-link">Link</button>
    <hr>
    <h2>Button Elements</h2>
    <a href="#" class="btn btn-info" role="button">Link Button</a>
    <button type="button" class="btn btn-info">Button</button>
    <input type="button" class="btn btn-info" value="Input Button">
    <input type="submit" class="btn btn-info" value="Submit Button">
        <hr>
        <h2>Button Outline</h2>
    <button type="button" class="btn btn-outline-primary">Primary</button>
    <button type="button" class="btn btn-outline-secondary">Secondary</button>
    <button type="button" class="btn btn-outline-success">Success</button>
    <button type="button" class="btn btn-outline-info">Info</button>
    <button type="button" class="btn btn-outline-warning">Warning</button>
    <button type="button" class="btn btn-outline-danger">Danger</button>
    <button type="button" class="btn btn-outline-dark">Dark</button>
    <button type="button" class="btn btn-outline-light text-dark">Light</button>
<hr>
<h2>Button Sizes</h2>
<button type="button" class="btn btn-primary btn-lg">Large</button>
<button type="button" class="btn btn-primary btn-md">Default</button>
<button type="button" class="btn btn-primary btn-sm">Small</button>

    <hr>  <h2>Block Level Buttons</h2>
    <button type="button" class="btn btn-primary btn-block">Button 1</button>
    <button type="button" class="btn btn-success btn-block">Button 2</button>
    <br>

    <h2>Large Block Level Buttons</h2>
    <button type="button" class="btn btn-primary btn-lg btn-block">Button 1</button>
    <button type="button" class="btn btn-success btn-lg btn-block">Button 2</button>
    <br>

    <h2>Small Block Level Buttons</h2>
    <button type="button" class="btn btn-primary btn-sm btn-block">Button 1</button>
    <button type="button" class="btn btn-success btn-sm btn-block">Button 2</button>
    <hr>
    <h2>Button States</h2>
    <button type="button" class="btn btn-primary">Primary Button</button>
    <button type="button" class="btn btn-primary active">Active Primary</button>
    <button type="button" class="btn btn-primary" disabled>Disabled Primary</button>
    <a href="#" class="btn btn-primary disabled">Disabled Link</a>
    <hr>
    <h2>Spinner Buttons</h2>
  <p>Add spinners to buttons:</p>

  <button class="btn btn-primary">
    <span class="spinner-border spinner-border-sm"></span>
  </button>

  <button class="btn btn-primary">
    <span class="spinner-border spinner-border-sm"></span>
    Loading..
  </button>

  <button class="btn btn-primary" disabled>
    <span class="spinner-border spinner-border-sm"></span>
    Loading..
  </button>

  <button class="btn btn-primary" disabled>
    <span class="spinner-grow spinner-grow-sm"></span>
    Loading..
  </button>
</div>

</body>
</html>
