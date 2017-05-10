 ; FICHIER DE ZONE POUR LE DOMAIN wt15.ephec-ti.be.


$TTL 604800
$ORIGIN wt15.ephec-ti.be.

@    IN    SOA    ns.wt15.ephec-ti.be. admin.wt15.ephec-ti.be. (
                  2017042601 ; Serial (today)
                  86400      ; Refresh (1 jour)
                  300        ; Retry (5 min)
                  25292000   ; Expire (1 mois)
                  604800     ; Negative Cache TTL
 )

@    IN    NS     ns

ns         IN    A    79.137.39.21
www        IN    A    79.137.39.21
b2b        IN    A    79.137.39.21
intranet   IN    A    79.137.39.21