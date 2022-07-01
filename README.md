
# Push Swap

• Le programme est composé de deux listes de nombres nommées la et lb.

• Créer un programme dans lequel la est donnée en paramètre (toutes les données sont valides et n’ont pas besoin d’être vérifiées).

• Le programme doit afficher la série d’opérations qui permettent de trier cette liste.

• Au tout début,lb est vide, et la doit contenir un certain nombre de nombres positifs ou négatifs.

• L’objectif du programme est de trier la en ordre croissant.

• Seules ces opérations sont autorisées:

sa: échange les positions des deux premier séléments de la (rien ne se produit s’il n’y a pas assez d’éléments).

sb: échange les positions des deux premiers éléments de lb (rien ne se produit s’il n’y a pas assez d’éléments).

sc: sa et sb en même temps.

pa: prend le premier élément de lb et le place à la première position de la (rien ne se produit si lb est vide).

pb: prend le premier élément de la et le place à la première position de lb (rien ne se produit si la est vide).

ra: fait une rotation de la vers le début. (le premier élément devient le dernier).

rb: fait une rotation de lb vers le début (le premier élément devient le dernier).

rr: ra et rb en même temps.

rra: fait une rotation de la vers la fin. (le dernier élément devient le premier).

rrb: fait une rotation de lb vers la fin. (le dernier élément devient le premier).

rrr: rra et rrb en même temps.

#### Les opérations doivent être affichées par un espace, pas d’espace au début ou à la fin, avec un retour à la ligne.
 
## Exécution

Exécutez le fichier en ligne de commande et passez et nombres en arguments suivi d'un cat -e pour voir l'affichage des opérations.

Ex :

```bash
  php push_swap.php 2 1 3 6 5 7 | cat -e
```
    
