
                </div>
                <footer class="footer ">
                    <p>© 2021 All rights reserved</p>
                </footer>
            </div>
        </div>
    </div>
    </div>


    <!-- js btr4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous ">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js " integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin=" anonymous "></script>
    <script src="./frontend/assets/js/medium-zoom.min.js"></script>
    <script src="./frontend/assets/js/infoHome.js "></script>

    <!-- jquery/tab bt4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>
<script>
    //click form
    Validator({
        form: '#form_ctt',
        errorSelector: '#error_ctt',
        rules: [
            Validator.isRequired('#ip_cttName'),
            Validator.isEmail('#ip_cttEmail'),
            Validator.isMinLength('#tta_contMessage', 10)
        ]
    })
</script>
</div>