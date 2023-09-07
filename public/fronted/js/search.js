var subjectObject = {
    "Egypt": {
      "Cairo": ["New Cairo", "Nasr City", "Madinaty", "Heliopolis", "Maadi", "Zamalek", "New Administrative Capital", "New Cairo-Settlement", "Katameya", "Muqattam", "garden City", "El Qobbah", "Zahraa El Maadi", "Rehab City","15 may city","Mostakbal City","Badr City","DownTown Caireo","Helioplas"],
      "Giza": ["6 October", "sheikh Zayed", "El Haram", "Faisal", 'OCTOBER GARDENS CITY', "Mohandiseen", 'Hadayek El Ahram'],
      "Alexandria": ['Smouha', 'Sidi Bishr', 'Miami', 'Ajami', 'Abu Qir', 'Montaza', 'el mandara', 'Al nakhil', 'Burj Al Arab', 'Glim', 'Roshdy', 'San Stefano', 'Sporting', 'Stanley', 'Moharam Bek','Mahatet El Raml','Louran' ],
      "Marsa Matrouh": ["North Coast", "El Alamein", "Marsa Matrouh", "El Dabaa", "El Hamam", "Siwa"],
      "Gharbiya Governorate": ["Tanta", "El Mahalla El Kubra", "Zefta", "Kafr El Zayat", "Samanoud", "El Santa", "Basyoun", "Qutur"],
      "Dakahlia": ["Mansoura", "Talkha", "Aga", "Mit Ghamr", "Sherbin", "New Mansoura", "Gamas"],
      "alsharqia": ["10th of Ramadon", "Zagazig", "Bilbeis", "Minya al-Qamh", "Faqous", "New Salhia"],
      "Qaliubiya": ["Shubra Al Khaimah", "Banha", "Khusus", "Qalyub"],
      "Menoufia": ["Shbeen El Koom", "Quesna", "Sadat", "Mnouf", "Ashmun", "Birket El Sab"],
      "Beheira": ["Damanhur", "Kafr El Dawwar", "Etay Al -Barud", "Kom Hamada", "Badr ", "Wadi Natrun"],
      "Damietta": ["Damietta city", "New Damietta", "Ras El Bar", "Kafr Saad", "Faraskour", "Ezbat Al -Burj"],
      "Ismailia": ["Ismailia city", "Fayed", "El Qantara", "Tell El Kebir"],
      "Suez": ["Ain Sokhna", "Suez", "Arbaeen", "Faisal", "Ataka"],
      "Port Said": ["Al Sharq", "Port Fouad", "Al -Dahwah", "elzuhur", "elmunakh", "Arab"],
      "The Red Sea": ["Hurghada", "El Gouna", "Safaga", "Sahl Hasheesh", "Ras Ghareb", "Marsa Alam"],
      "South Sina": ["Sharm El-Shaikh", "Ras Sidr", "Dahab", "El Tor", "Nuweiba", "Saint Catherine", "Taba"],
      "Kafr El -Sheikh": ["The city of Kafr El -Sheikh", "Desouk", "Baltim", "Qallin", "Biyala", "Burullus", "Sidi Salem"],
      "Fayoum": ["Fayoum", "Abshawi", "Snors", "ATSA", "Tamiyah"],
      "the new Valley": ["Kharga Oasis", "Farafra", "Mut", "Dakhla", "Paris"],
      "Aswan": ["Aswan city", "Kom Ombo", "Edfu", "Abu Al -Rish", "Daraw", "Abu Simbel"],
      "Asyut": ["Assiut", "New Assiut", "Dairout", "El Fateh", "Manfalut", "New Thebes"],
      "Luxor": ["Luxor", "Esna", "Kurna", "Armant", "El Tod"],
      "Minya": ["Minya", "New Minya", "Mallawi", "Samalout", "Bani Mazar"],
      "Bani Sweif": ["Bani Sweif", "New Bani Sweif", "Wasta" ],
      "Sohag": ["New Sohag", "Tahta", "Akhmim", "Jarja", "Sohag"],
      "Qena": ["Nag Hammadi", "QUS", "Abu Tesht", "Dishna"],


    },
    "UAE": {
      "The Emirate of Abu Dhabi": ['Abu Dhabi', 'Al Ain', 'Al Dhafra'],
      "Emirate of Dubai": ['Dubai'],
      "The Emirate of Sharjah": ['Khor Fakkan', 'Kalba', 'Dibba Al -Hosn','Dhaid'],
      "Ajman Emirate": ['Ajman', 'Manama', 'Masfout' ],
      "The Emirate of Umm Al Quwain": ['Umm Al Quwain' ],
      "Ras Al Khaimah Emirate": ['Ras Al Khaimah', 'Al -Jazeera Al -Hamra', 'Digdaga', 'Khatt'],
      "The Emirate of Fujairah": ['RDibba FujairahEPL', 'Al Badiyah', 'Masafi', 'Qidfa', 'albithna'],
    },
    "Georgia":{
      "Kutisi" : [],
      "Borjomi" : [],
      "Mtskheta" : [],
      "Gori" : [],
      "Signagi" : [],
      "Kvareli" : [],
    },
    "Turkiye":{
      "Istanbu": [],
      "Trabzon": [],
      "Antalya": [],
      "Fethiyeh": [],
      "Bursa": [],
      "sakarya": [],
      "Yalova": [],
      "Bodrum": [],
      "KOCAELI": [],
      "Capadocia": [],
    }
}

window.onload = function(){
    var fir = document.getElementById('fir')
    var sec = document.getElementById('sec')
    var thi = document.getElementById('thi')

    for(var a in subjectObject){
        // console.log(x);
        fir.options[fir.options.length] = new Option(a)
    }

    fir.onchange = function(){
        sec.length = 1
        thi.length = 1

        sec.style.display = 'block'
        thi.style.display = 'none'

        for(var b in subjectObject[this.value]){
            // console.log(y);
            sec.options[sec.options.length] = new Option(b)
        }
    }


    sec.onchange = function(){
        thi.length = 1

        thi.style.display = 'block'
        c = subjectObject[fir.value][this.value]
        console.log(c);
        for(let i=0; i<c.length; i++){
            thi.options[thi.options.length] = new Option(c[i])
        }
    }
    var first = document.getElementById('first')
    var second = document.getElementById('second')
    var third = document.getElementById('third')

    for(var x in subjectObject){
        // console.log(x);
        first.options[first.options.length] = new Option(x)
    }

    first.onchange = function(){
        second.length = 1
        third.length = 1

        second.style.display = 'block'
        third.style.display = 'none'

        for(var y in subjectObject[this.value]){
            // console.log(y);
            second.options[second.options.length] = new Option(y)
        }
    }


    second.onchange = function(){
        third.length = 1

        third.style.display = 'block'
        z = subjectObject[first.value][this.value]
        console.log(z);
        for(let i=0; i<z.length; i++){
            third.options[third.options.length] = new Option(z[i])
        }
    }
}




