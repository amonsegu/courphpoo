<?php


/**
 * Class Book
 */
class Book
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var int
     */
    private $nbPage;

    /**
     * @var DateTime|null
     */
    private $publicationDate;

    /**
     * Getter de l'attribut author : retourne la valeur de l'attribut
     *
     * @return string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * Setter de l'attribut : lui affecte la valeur reçue en paramètre
     * self = la classe dans laquelle on est
     * @param string $author
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbPage(): ?int
    {
        return $this->nbPage;
    }

    /**
     * @param int $nbPage
     */
    public function setNbPage(int $nbPage)
    {
        $this->nbPage = $nbPage;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getPublicationDate(): ?DateTime
    {
        return $this->publicationDate;
    }

    /**
     * @param DateTime|null $publicationDate
     * @return book
     */
    public function setPublicationDate(?DateTime $publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicationDateAsString(): string
    {
        if(is_null($this->publicationDate)){
           return 'inconnue';
        }
        return $this->publicationDate->format('d/m/Y');
    }
}