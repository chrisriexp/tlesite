<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tailwind.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Additional Products Lead Submission</title>
</head>
<body class="bg-custom-back">
    <div class="nav-bar container row px-10 py-5">
        <a href="../index.php" class="text-action text-xl font-semibold uppercase ">The <span class="text-red-400">Lead</span> Exchange</a>
    </div>

    <h1 class="text-center text-4xl text-darktext font-semibold uppercase mt-20">Additional Products</h1>

    <form class="grid justify-items-center mt-20 mx-64">
        <div class="py-10 border-b-4 border-action w-full">
            <h1 class="text-darktext font-semibold text-2xl uppercase">Agent</h1>

            <div class="grid grid-cols-3 mt-4 w-fit">
                <div class="grid col">
                    <label for="agentFirstName" class="text-lighttext">Agent First Name <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="agentFirstName" id="agentFirstName">
                </div>

                <div class="grid  col">
                    <label for="agentLastName" class="text-lighttext">Agent Last Name <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="agentLastName" id="agentLastName">
                </div>

                <div class="grid col ml-16">
                    <label for="agentPhone" class="text-lighttext">Agent Phone <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="agentPhone" id="agentPhone">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 mt-2 w-fit">
                <div class="grid col">
                    <label for="agentEmail" class="text-lighttext">Email <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-96 h-10 rounded-md mt-2 text-white" name="agentEmail" id="agentEmail">
                </div>

                <div class="grid col">
                    <label for="agentAgency" class="text-lighttext">Agency <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-96 h-10 rounded-md mt-2 text-white" name="agentAgency" id="agentAgency">
                </div>
            </div>
        </div>

        <div class="py-10 border-b-4 border-action w-full">
            <h1 class="text-darktext font-semibold text-2xl uppercase">Client</h1>

            <div class="grid grid-cols-3 mt-4 w-fit">
                <div class="grid col">
                    <label for="firstName" class="text-lighttext">First Name <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="firstName" id="firstName">
                </div>

                <div class="grid  col">
                    <label for="lastName" class="text-lighttext">Last Name <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="lastName" id="lastName">
                </div>

                <div class="grid col ml-16">
                    <label for="phone" class="text-lighttext">Phone <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="phone" id="phone">
                </div>
            </div>

            <div class="grid grid-cols-2 w-full gap-6 mt-2">
                <div class="grid col">
                    <label for="agentEmail" class="text-lighttext">Email <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-96 h-10 rounded-md mt-2 text-white" name="agentEmail" id="agentEmail">
                </div>
            </div>
        </div>

        <div class="py-10 border-b-4 border-action w-full">
            <div class="grid mt-2">
                <label for="address" class="text-lighttext">Address <span class="text-red-600">*</span></label>
                <input type="text" name="address" id="address" class="bg-action w-96 h-10 rounded-md mt-2 text-white">
            </div>

            <div class="grid mt-2">
                <label for="address2" class="text-lighttext">Address 2</label>
                <input type="text" name="address2" id="address2" class="bg-action w-96 h-10 rounded-md mt-2 text-white">
            </div>

            <div class="grid mt-2">
                <label for="city" class="text-lighttext">City <span class="text-red-600">*</span></label>
                <input type="text" name="city" id="city" class="bg-action w-96 h-10 rounded-md mt-2 text-white">
            </div>

            <div class="grid grid-cols-3 w-fit mt-2 gap-4">
                <div class="grid col">
                    <label for="state" class="text-lighttext">State <span class="text-red-600">*</span></label>
                    <input type="text" name="state" id="state" class="bg-action w-64 h-10 rounded-md mt-2 text-white">
                </div>

                <div class="grid col">
                    <label for="zip" class="text-lighttext">Zip <span class="text-red-600">*</span></label>
                    <input type="text" name="zip" id="zip" class="bg-action w-64 h-10 rounded-md mt-2 text-white">
                </div>

                <div class="grid col">
                    <label for="country" class="text-lighttext">Country <span class="text-red-600">*</span></label>
                    <input type="text" name="country" id="country" class="bg-action w-64 h-10 rounded-md mt-2 text-white">
                </div>
            </div>
        </div>

        <div class="py-10 w-full">
            <h1 class="text-darktext text-2xl font-semibold uppercase">Product Type</h1>

            <div class="grid grid-cols-2 gap-14 w-full">
                <div class="grid col">
                    <div class="grid mt-4">
                        <label for="product-select" class="text-lighttext">Product Selection <span class="text-red-600">*</span></label>
                        <select name="product-select" id="product-select" class="bg-action w-96 h-10 rounded-md mt-2 text-white">
                            <option value="select">Select From List</option>
                            <option value="flood">Flood Insurance</option>
                            <option value="commercial">Commercial Insurance</option>
                            <option value="umbrella">Umbrella</option>
                            <option value="paf">Personal Article Floater</option>
                            <option value="atv-golfcart">RV, ATV, Golf Cart</option>
                        </select>
                    </div>

                    <div class="grid mt-4">
                        <div class="grid py-8">
                            <label for="additional-info" class="text-lighttext">Additional Information</label>
                            <textarea name="additional-info" id="additional-info" cols="30" rows="10" class="bg-action rounded-md mt-2 text-white pl-4 pt-2"></textarea>
                        </div>  
                    </div>
                </div>

                <div class="grid col">
                    <div class="grid mt-4 gap-y-6 h-fit">
                        <div class="grid gap-2">
                            <label for="upload" class="text-lighttext">Upload File <span class="text-red-600">*</span></label>
                            <input type="file" name="upload" id="upload" class="bg-action text-white rounded-md p-2 px-6">
                        </div>

                        <div class="grid gap-2">
                            <label for="upload1" class="text-lighttext">Upload File</label>
                            <input type="file" name="upload1" id="upload1" class="bg-action text-white rounded-md p-2 px-6">
                        </div>

                        <div class="grid gap-2">
                            <label for="upload2" class="text-lighttext">Upload File</label>
                            <input type="file" name="upload2" id="upload2" class="bg-action text-white rounded-md p-2 px-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" name="home-submit" id="home-submit" class="text-xl uppercase text-white bg-action p-2 px-10 rounded-md mb-20">
    </form>
</body>
</html>