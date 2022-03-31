

        {foreach from=$offers item=$offer}
            <div class='col-sm-12 col-lg-3 col-md-3 border rounded mb-3 pt-3'>
                <h4 class='text-center mb-3'>{$offer['promotion']} - {$offer['companyActivity']}</h4>
                <div class='container'>
                    <div class='row'>
                        <p class='col-sm-6 col-lg-10 col-md-12 mb-0'><strong>{$offer['companyName']}</strong></p>
                        <p class='col-md-12 col-lg-2 col-sm-6 text-md-end text-lg-end text-sm-start mt-0 mb-3 highGrade'><strong>{$offer['reviewPilot']}</strong></p>
                    </div>
                    <div class='row'>
                        <p class='col-12'>{$offer['offerDescription']}</p>
                        <p class='col-12'>{$offer['postalCode']}, {$offer['roadNumber']} {$offer['roadName']}, {$offer['cityName']}</p>
                    </div>
                </div>
            </div>
        {/foreach}
