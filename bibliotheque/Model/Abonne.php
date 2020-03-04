<?php


namespace Model;


use App\Cnx;

/**
 * Class Abonne
 * @package Model
 */
class Abonne
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return Abonne
     */
    public function setId(?int $id): Abonne
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     * @return Abonne
     */
    public function setPrenom(?string $prenom): Abonne
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function save()
    {
        $pdo = Cnx::getInstance();

        $query = 'INSERT INTO abonne(prenom) VALUES (:prenom)';
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':prenom' => $this->prenom
        ]);
    }

    public function validate(array &$errors): bool
    {
        if (empty($this->prenom)) {
            $errors[] = 'Le prénom est obligatoire';
        } elseif (mb_strlen($this->prenom) > 100) {
            $errors[] = "Le prénom ne doit pas faire plus de 100 caractères";
        }

        return empty($errors);
    }

    /**
     * Retourne tous les abonnés de la bdd
     * sous la forme d'un tableau d'objets Abonne
     *
     * @return Abonne[]
     */
    public static function findAll(): array
    {
        $pdo = Cnx::getInstance();

        $stmt = $pdo->query('SELECT * FROM abonne ORDER BY id');
        $result = $stmt->fetchAll();

        $abonnes = [];

        foreach ($result as $data) {
            $abonne = new self(); // identique à $abonne = new Abonne();

            // on sette les attributs à partir des résultats de la requête :
            $abonne
                ->setId($data['id'])
                ->setPrenom($data['prenom'])
            ;

            $abonnes[] = $abonne;
        }

        return $abonnes;
    }

    public function find(int $id):?self
    {

    }
}
