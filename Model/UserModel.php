<?php
        class UserModel
        {
            public function getListSessions()
            {
                $url = "https://accounts.google.com/o/oauth2/iframerpc";
                $params = [
                    'action' => 'listSessions',
                    'client_id' => '1091747112915-f4rok98l07224f2btuud0ti5k346802g.apps.googleusercontent.com',
                    'origin' => 'https://order.mcdonalds.co.il',
                    'scope' => 'openid profile email',
                    'ss_domain' => 'https://order.mcdonalds.co.il'
                ];
                $query_string = http_build_query($params);
                $full_url = $url . '?' . $query_string;
                
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $full_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_ENCODING, "gzip, deflate, br");
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                
                $headers = [
                    "authority: accounts.google.com",
                    "method: GET",
                    "path: /o/oauth2/iframerpc?action=listSessions&client_id=1091747112915-
                    f4rok98l07224f2btuud0ti5k346802g.apps.googleusercontent.com&origin=https%3A%2F%2Forder.mcdonalds.co.il&
                    scope=openid%20profile%20email&ss_domain=https%3A%2F%2Forder.mcdonalds.co.il",
                    "scheme: https",
                    "Accept: */*",
                    "Accept-Encoding: gzip, deflate, br, zstd",
                    "Accept-Language: he-IL,he;q=0.9,en-US;q=0.8,en;q=0.7",
                    "Cookie: __Secure-3PAPISID=kmD44H6Q2UYAIn9O/A7xKn4fge9lj5Hci7; 
                    __Secure-3PSID=g.a000jgh5SVdYXSZOKHInqRRwEeRGjW8hnpTOz5_EBwlEr7cZd-
                    TDvweink1EAsdToLwMQKDXNgACgYKAc4SAQASFQHGX2Mi7kynpOHjnodCkXfNCFEzixoVAUF8yKq5WGvN6PBNQj_ZU0PusGtv0076; 
                    __Host-3PLSID=o.calendar.google.com|o.drive.google.com|o.mail.google.com|o.meet.google.com|s.IL|s.youtube:g.a000jgh5ST-
                    dpOCy6Fz592xsbdN26dieWZYD5f2NP2-XwnSUGyw34FlXm77DyLOEGsFAbML2RwACgYKAZwSAQASFQHGX2Mirewj-
                    MeW7g3tpVGYtwLyuRoVAUF8yKoy7R0XPYUsT8mwmA9_dfHD0076; 1P_JAR=2024-05-29-06; 
                    NID=514=FANjIUYT37FocUavvNwVb33Ed26va9cCXbSlRuFfKpfnMQiUO6qT9v2ntFTTTtPBFMPXCQauhdvaspbyVEbkGHQDQwMX1312fTnXOaG
                    StLJscjibs8legXPjzefUEIFx57grZEaFa4VRjS9QrD_YZkUpxOQEV61xVVMXwcjPOhWLEurG4xOBHR8ayty2NtTlSe86s1nozQ3pT7ckvyROhpwauWLephFDh
                    rGhRRYp7P0ypCcYkrSekFLANF5_yXRU6jSufoak1UcliQP3SxFjfOpIuOZzTfb6oi_t4b9BmqgWZksPA-D8w5OofZs7uw6moNe6pC0OjaYSenM; 
                    __Secure-3PSIDTS=sidts-CjEBLwcBXAmGsyF__No8udjHmn-dXibxe4gVZApiU9pNfSC7vAKRWx9y0LFDJdF-6D4uEAA; 
                    __Secure-3PSIDCC=AKEyXzVNlRHrsp-pniat329VXdWfD7aqaobPf4oNVFuye_2XUkEeAFF-WzgSv1SwKZyOvZHlOtEx",
                    "Priority:u=1, i",
                    "Referer:https://accounts.google.com/o/oauth2/iframe",
                    "Sec-Ch-Ua:'Google Chrome';v='125', 'Chromium';v='125', 'Not.A/Brand';v='24'",
                    "Sec-Ch-Ua-Mobile:?0",
                    "Sec-Ch-Ua-Platform:'Windows'",
                    "Sec-Fetch-Dest: empty",
                    "Sec-Fetch-Mode: cors",
                    "Sec-Fetch-Site: same-origin",
                    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) 
                    Chrome/125.0.0.0 Safari/537.36",
                    "X-Chrome-Id-Consistency-Request: version=1,client_id=77185425430.apps.googleusercontent.com,
                    device_id=1b3b02f3-5c6f-44d2-b5f9-fdff9db11268,sync_account_id=108561491387912736894,
                    signin_mode=all_accounts,signout_mode=show_confirmation",
                    "X-Client-Data: CIu2yQEIpbbJAQipncoBCMaWywEIlKHLAQia/swB WgzQEIwoXOARj2yc0B Decoded: message ClientVariations 
                    { // Active client experiment variation IDs. repeated int32 
                        variation_id = [3300107, 3300133, 3313321, 3328838, 3330196, 3358490, 3362821, 3375810]; 
                        // Active client experiment variation IDs that trigger server-side behavior. 
                        repeated int32 trigger_variation_id = [3368182]; }",
                    "X-Requested-With: XmlHttpRequest"
                ];
                
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                
                $response = curl_exec($ch);
                
                if (curl_errno($ch)) {
                    echo 'Error:' . curl_error($ch);
                } else {
                    return $response;
                }
                
                curl_close($ch);
            }

            function emptyCart() {
                $url = "https://mapi.mcdonalds.co.il/api/website/7.3/emptyCart";
                
                $params = [
                ];
                
                $query_string = http_build_query($params);
                
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                
                $headers = [
                ];
                
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                
                $response = curl_exec($ch);
                
                if (curl_errno($ch)) {
                    echo 'Error:' . curl_error($ch);
                } else {
                    return $response;
                }
                
                curl_close($ch);
            }
        }
?>