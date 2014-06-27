//* @media only screen and (max-width: 760px) {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
            display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
            position: absolute;
            top: -9999px;
            left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee; 
            position: relative;
            padding-left: 50%; 
	}
	
	td:before { 
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%; 
            padding-right: 10px; 
            white-space: nowrap;
	}
	
	/* Tablica knjiga */
	.knjiga td:nth-of-type(1):before { content: "Naslov"; }
	.knjiga td:nth-of-type(2):before { content: "Autor"; }
	.knjiga td:nth-of-type(3):before { content: "Godina izdanja"; }
	.knjiga td:nth-of-type(4):before { content: "Dostupnost knjige"; }
        
        /* Tablica posudbe */
  
      	.posudbe td:nth-of-type(1):before { content: "Datum posudbe"; }
	.posudbe td:nth-of-type(2):before { content: "Datum povratka"; }
	.posudbe td:nth-of-type(3):before { content: "Knjiga"; }
	.posudbe td:nth-of-type(4):before { content: "Član"; }
        
        /* Tablica članova */
  
      	.clan td:nth-of-type(1):before { content: "Ime"; }
	.clan td:nth-of-type(2):before { content: "Prezime"; }
	.clan td:nth-of-type(3):before { content: "Fakultet"; }
	.clan td:nth-of-type(4):before { content: "Kontakt"; }
        .clan td:nth-of-type(5):before { content: "Mjesto"; }
        
        
	.katalog td:nth-of-type(1):before { content: "Naslov"; }
	.katalog td:nth-of-type(2):before { content: "Autor"; }
	.katalog td:nth-of-type(3):before { content: "Godina izdanja"; }
	.katalog td:nth-of-type(4):before { content: "Dostupnost knjige"; }
        
        
    } */