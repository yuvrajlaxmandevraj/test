<?php

function p($p, $exit = 1)
{
    echo '<pre>';
    print_r($p);
    echo '</pre>';
    if ($exit == 1)
    {
        exit;
    }
} 
p((json_decode('{
    "features": [
        {
            "geometry": {
                "coordinates": [
                    75.8189817,
                    26.9154576
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 315734346,
                "country": "India",
                "osm_key": "place",
                "city": "Jaipur Municipal Corporation",
                "countrycode": "IN",
                "osm_value": "city",
                "postcode": "302001",
                "name": "Jaipur",
                "county": "Jaipur Tehsil",
                "state": "Rajasthan",
                "type": "district"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.74701641691182,
                    27.1506772
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 1950062,
                "extent": [
                    74.9143445,
                    27.8605623,
                    76.2854276,
                    26.4404606
                ],
                "country": "India",
                "osm_key": "boundary",
                "countrycode": "IN",
                "osm_value": "administrative",
                "name": "Jaipur",
                "state": "Rajasthan",
                "type": "county"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    86.13594157133696,
                    23.471847750000002
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 10370455,
                "extent": [
                    86.013868,
                    23.5863897,
                    86.2472248,
                    23.359395
                ],
                "country": "India",
                "osm_key": "boundary",
                "countrycode": "IN",
                "osm_value": "administrative",
                "name": "Jaipur",
                "state": "West Bengal",
                "type": "county"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.70330279413204,
                    26.95252425
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 9644091,
                "extent": [
                    75.4991626,
                    27.0576943,
                    75.9103775,
                    26.8492678
                ],
                "country": "India",
                "osm_key": "boundary",
                "countrycode": "IN",
                "osm_value": "administrative",
                "name": "Jaipur Tehsil",
                "state": "Rajasthan",
                "type": "county"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    79.58172330914837,
                    18.794950800000002
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 9731184,
                "extent": [
                    79.4953127,
                    18.9186608,
                    79.7211743,
                    18.6717867
                ],
                "country": "India",
                "osm_key": "boundary",
                "countrycode": "IN",
                "osm_value": "administrative",
                "postcode": "504216",
                "name": "Jaipur mandal",
                "state": "Telangana",
                "type": "county"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.7866539,
                    26.9207888
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 2669084994,
                "country": "India",
                "city": "Jaipur Municipal Corporation",
                "countrycode": "IN",
                "postcode": "302006",
                "locality": "Barodia Scheme",
                "county": "Jaipur Tehsil",
                "type": "house",
                "osm_type": "N",
                "osm_key": "railway",
                "street": "Ram Mandir Road",
                "district": "Bani Park",
                "osm_value": "station",
                "name": "Jaipur Junction",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    85.2996218,
                    23.4133443
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9287892031,
                "country": "India",
                "osm_key": "place",
                "city": "Ranchi",
                "countrycode": "IN",
                "osm_value": "suburb",
                "postcode": "834008",
                "name": "Jaipur",
                "county": "Kanke",
                "state": "Jharkhand",
                "type": "district"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    76.28791976371807,
                    20.683071050000002
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 14277849,
                "extent": [
                    76.2679481,
                    20.7075086,
                    76.3112819,
                    20.6589808
                ],
                "country": "India",
                "osm_key": "boundary",
                "city": "Jaipur Londe",
                "countrycode": "IN",
                "osm_value": "administrative",
                "name": "Jaipur",
                "county": "Motala",
                "state": "Maharashtra",
                "type": "district"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    86.1443853,
                    23.4170993
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 3998324333,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "postcode": "723201",
                "name": "Jaipur",
                "county": "Jaipur",
                "state": "West Bengal",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    79.5856465,
                    18.8464525
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 1420974661,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "postcode": "504216",
                "name": "Jaipur",
                "county": "Jaipur mandal",
                "state": "Telangana",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    85.6461308,
                    24.4802061
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9456807271,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "hamlet",
                "name": "Jaipur",
                "county": "Koderma",
                "state": "Jharkhand",
                "type": "district"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    85.7264582,
                    22.250013
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9621433808,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "hamlet",
                "name": "Jaipur",
                "county": "Hat Gamharia",
                "state": "Jharkhand",
                "type": "district"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    86.8447351,
                    24.5860172
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 6221036201,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Katoria",
                "state": "Bihar",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    78.7378657,
                    20.7654539
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9894446002,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Seloo",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    79.6868848,
                    29.1229234
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 7936530808,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Lalkuan",
                "state": "Uttarakhand",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    77.2660947,
                    19.9297013
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9979984543,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Washim",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    76.7734265,
                    19.8816631
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 5837060090,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Sengaon",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    76.3451528,
                    19.8383132
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9959924512,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Mantha",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    76.59931634838895,
                    20.7476935
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 14280773,
                "extent": [
                    76.5830939,
                    20.7647817,
                    76.614232,
                    20.7277293
                ],
                "country": "India",
                "osm_key": "boundary",
                "city": "Jaipur Lande",
                "countrycode": "IN",
                "osm_value": "administrative",
                "name": "Jaipur Londe",
                "county": "Khamgaon",
                "state": "Maharashtra",
                "type": "district"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    87.9314803,
                    22.5905564
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 7152036488,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Amta - II",
                "state": "West Bengal",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    77.4807787,
                    20.5459981
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9974664210,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Karanja",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.80798884627488,
                    26.8281087
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 28719635,
                "extent": [
                    75.793971,
                    26.8361298,
                    75.844245,
                    26.8200575
                ],
                "country": "India",
                "countrycode": "IN",
                "postcode": "302017",
                "county": "Sanganer Tehsil",
                "type": "house",
                "osm_type": "W",
                "osm_key": "aeroway",
                "street": "Ganga Marg",
                "district": "Jagatpura",
                "osm_value": "aerodrome",
                "name": "Jaipur International Airport",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    79.4920474,
                    24.8947851
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9579447782,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Chhatarpur Tahsil",
                "state": "Madhya Pradesh",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    79.0305108,
                    20.8735288
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9891901476,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Nagpur Rural Taluka",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    82.9913628,
                    20.8858265
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 1469100066,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Burden P.S.",
                "state": "Odisha",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.7992162,
                    26.8735108
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 1753726590,
                "country": "India",
                "city": "Jaipur Municipal Corporation",
                "countrycode": "IN",
                "postcode": "302001",
                "locality": "Barkat Nagar",
                "county": "Jaipur Tehsil",
                "type": "house",
                "osm_type": "N",
                "osm_key": "railway",
                "district": "Tonk Phatak",
                "osm_value": "station",
                "name": "Gandhinagar Jaipur",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.5292195,
                    19.9043221
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9971428673,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur",
                "county": "Chhatrapati Sambhajinagar",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.7844805612234,
                    26.916442099999998
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 862568919,
                "extent": [
                    75.783711,
                    26.9170122,
                    75.7852963,
                    26.9159262
                ],
                "country": "India",
                "city": "Jaipur",
                "countrycode": "IN",
                "postcode": "302007",
                "county": "Jaipur Tehsil",
                "type": "house",
                "osm_type": "W",
                "osm_key": "amenity",
                "street": "Jacob Road",
                "district": "Sodala",
                "osm_value": "post_depot",
                "name": "National Sorting Hub Jaipur",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    76.600129,
                    20.747275
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9832254047,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipur Lande",
                "county": "Khamgaon",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    74.0511972,
                    32.8833011
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 2558622953,
                "country": "Pakistan",
                "osm_key": "place",
                "countrycode": "PK",
                "osm_value": "village",
                "name": "Jaipur Village",
                "county": "Kharian Tehsil",
                "state": "Punjab",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    76.2810542,
                    20.6831842
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 3957021160,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "postcode": "443103",
                "name": "Jaipur Londe",
                "county": "Motala",
                "state": "Maharashtra",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    77.2519283,
                    28.5878849
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 2723877684,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "district": "Jaipur Estate",
                "osm_value": "neighbourhood",
                "postcode": "110013",
                "name": "Jaipur Estate",
                "county": "Defence Colony Tehsil",
                "state": "Delhi",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.70278177265095,
                    26.92565925
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 955215278,
                "extent": [
                    75.7017324,
                    26.9266778,
                    75.7040171,
                    26.9246233
                ],
                "country": "India",
                "city": "Jaipur Municipal Corporation",
                "countrycode": "IN",
                "postcode": "302001",
                "county": "Jaipur Tehsil",
                "type": "locality",
                "osm_type": "W",
                "osm_key": "landuse",
                "district": "Kanak Pura",
                "osm_value": "industrial",
                "name": "REIL, Jaipur",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.71268898425681,
                    26.93088145
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 954811332,
                "extent": [
                    75.7047214,
                    26.9321229,
                    75.7154526,
                    26.9296416
                ],
                "country": "India",
                "city": "Jaipur Municipal Corporation",
                "countrycode": "IN",
                "postcode": "302001",
                "county": "Jaipur Tehsil",
                "type": "locality",
                "osm_type": "W",
                "osm_key": "landuse",
                "district": "Kanak Pura",
                "osm_value": "industrial",
                "name": "Concor, Jaipur",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    77.25194125108503,
                    28.5878097
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 3672652,
                "extent": [
                    77.2509091,
                    28.5883279,
                    77.2528864,
                    28.5872585
                ],
                "country": "India",
                "osm_key": "boundary",
                "countrycode": "IN",
                "osm_value": "administrative",
                "name": "Jaipur Estate",
                "county": "Defence Colony Tehsil",
                "state": "Delhi",
                "type": "district"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.80212505535312,
                    26.896945000000002
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "R",
                "osm_id": 7923743,
                "extent": [
                    75.6887556,
                    27.0218662,
                    75.9118168,
                    26.7723494
                ],
                "country": "India",
                "osm_key": "boundary",
                "countrycode": "IN",
                "osm_value": "administrative",
                "name": "Jaipur Municipal Corporation",
                "county": "Jaipur Tehsil",
                "state": "Rajasthan",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.8666253,
                    26.5830008
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 8059880651,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "postcode": "303901",
                "name": "Jaipura",
                "county": "Chaksu Tehsil",
                "state": "Rajasthan",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.5654461909447,
                    26.84296845
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 495716022,
                "extent": [
                    75.5621448,
                    26.8469982,
                    75.5682894,
                    26.8388697
                ],
                "country": "India",
                "city": "Dahmi Kalan",
                "countrycode": "IN",
                "postcode": "303007",
                "county": "Sanganer Tehsil",
                "type": "house",
                "osm_type": "W",
                "osm_key": "amenity",
                "street": "Jogging Track",
                "osm_value": "university",
                "name": "Manipal University Jaipur",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.56176434143072,
                    26.8423537
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 1158554635,
                "extent": [
                    75.5593205,
                    26.8463506,
                    75.564968,
                    26.8383207
                ],
                "country": "India",
                "city": "Dahmi Kalan",
                "countrycode": "IN",
                "postcode": "303007",
                "county": "Sanganer Tehsil",
                "type": "house",
                "osm_type": "W",
                "osm_key": "amenity",
                "street": "Jogging Track",
                "osm_value": "university",
                "name": "Manipal University Jaipur",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.84832535291756,
                    26.92059925
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "W",
                "osm_id": 711962348,
                "extent": [
                    75.8474181,
                    26.9216033,
                    75.8492482,
                    26.9193671
                ],
                "country": "India",
                "osm_key": "leisure",
                "city": "Jaipur",
                "street": "Jamwa Ramgarh Road",
                "countrycode": "IN",
                "osm_value": "park",
                "postcode": "302002",
                "name": "Jaipur Park",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.76471127144305,
                    26.9255743
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "W",
                "osm_id": 745539452,
                "extent": [
                    75.7490534,
                    26.9341776,
                    75.774435,
                    26.9171206
                ],
                "country": "India",
                "osm_key": "landuse",
                "countrycode": "IN",
                "osm_value": "military",
                "postcode": "302001",
                "name": "Jaipur Cantonment",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.77573886716812,
                    26.93384545
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "W",
                "osm_id": 745539453,
                "extent": [
                    75.7663136,
                    26.9415904,
                    75.7850476,
                    26.9264515
                ],
                "country": "India",
                "osm_key": "landuse",
                "countrycode": "IN",
                "osm_value": "military",
                "postcode": "302006",
                "name": "Jaipur Cantonment",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.76015549147496,
                    26.9101133
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "W",
                "osm_id": 745539451,
                "extent": [
                    75.7529338,
                    26.9209042,
                    75.7686517,
                    26.8987704
                ],
                "country": "India",
                "osm_key": "landuse",
                "countrycode": "IN",
                "osm_value": "military",
                "postcode": "302001",
                "name": "Jaipur Cantonment",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.8209769,
                    26.9126972
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 4728303926,
                "country": "India",
                "osm_key": "leisure",
                "countrycode": "IN",
                "osm_value": "park",
                "postcode": "302001",
                "name": "Jaipur Zoo",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.76983441515345,
                    26.861367
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "W",
                "osm_id": 577062586,
                "extent": [
                    75.7696319,
                    26.8618085,
                    75.7700593,
                    26.8610265
                ],
                "country": "India",
                "osm_key": "leisure",
                "city": "Jaipur",
                "street": "VT Road",
                "countrycode": "IN",
                "osm_value": "park",
                "postcode": "302020",
                "name": "Jaipur City Park",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    -79.66109386755764,
                    43.771751300000005
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "W",
                "osm_id": 49419444,
                "extent": [
                    -79.662665,
                    43.7737772,
                    -79.6584971,
                    43.7697851
                ],
                "country": "Canada",
                "osm_key": "landuse",
                "city": "Brampton",
                "countrycode": "CA",
                "osm_value": "retail",
                "name": "Gore-Jaipur Plaza",
                "county": "Peel",
                "state": "Ontario",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.77852678964112,
                    26.97208795
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_id": 863276766,
                "extent": [
                    75.7776292,
                    26.9723802,
                    75.779639,
                    26.9718285
                ],
                "country": "India",
                "city": "Jaipur Municipal Corporation",
                "countrycode": "IN",
                "postcode": "302001",
                "county": "Jaipur Tehsil",
                "type": "locality",
                "osm_type": "W",
                "osm_key": "landuse",
                "district": "Vishwakarma Industrial Area",
                "osm_value": "industrial",
                "name": "VRL LOGISTICS LTD JAIPUR VKIA",
                "state": "Rajasthan"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    74.4039416,
                    24.7672619
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 8266436395,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "name": "Jaipura",
                "county": "Kapasan Tehsil",
                "state": "Rajasthan",
                "type": "city"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    75.80216521405222,
                    26.859605700000003
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "W",
                "osm_id": 962293917,
                "extent": [
                    75.8014532,
                    26.8602358,
                    75.8029104,
                    26.859045
                ],
                "country": "India",
                "osm_key": "leisure",
                "countrycode": "IN",
                "osm_value": "park",
                "postcode": "302018",
                "name": "jaipur stadium",
                "type": "locality"
            }
        },
        {
            "geometry": {
                "coordinates": [
                    77.1288192,
                    19.8509783
                ],
                "type": "Point"
            },
            "type": "Feature",
            "properties": {
                "osm_type": "N",
                "osm_id": 9981133052,
                "country": "India",
                "osm_key": "place",
                "countrycode": "IN",
                "osm_value": "village",
                "postcode": "431513",
                "name": "Jaipurwadi",
                "county": "Hingoli",
                "state": "Maharashtra",
                "type": "city"
            }
        }
    ],
    "type": "FeatureCollection"
}')->features));
function get_latlng($zip){
    p(urldecode('https://geocoder.ca/?locate=%20%20%20,%20INDIA,&geoit=XML&json=1'));
exit; 
 }
    var_dump(get_latlng("302012"));
?>