package domaine;

import javax.xml.bind.annotation.XmlRootElement;

@XmlRootElement
public class User
{
    private int  iduser, typeUser;

    private String nom, prenom, login, password;

    public User(String nom, String prenom, String login, String password) {

        setNom(nom);
        setPrenom(prenom);
        setLogin(login);
        setPassword(password);

    }
    
    public User(String nom, String prenom, String login, int iduser) {

        setNom(nom);
        setPrenom(prenom);
        setLogin(login);
        setId(iduser);

    }

    public User()
    {

    }
    
    public int  getId()
    {
        return iduser;
    }

    public void  setId(int iduser)
    {
        this.iduser = iduser;
    }

    public String getNom()
    {
        return nom;
    }

    public void  setNom(String nom)
    {
        this.nom = nom;
    }

    public String getPrenom()
    {
        return prenom;
    }

    public void  setPrenom(String prenom)
    {
        this.prenom = prenom;
    }

    public String getLogin()
    {
        return login;
    }

    public void  setLogin(String login)
    {
        this.login = login;
    }

    public String getPassword()
    {
        return password;
    }

    public int  getTypeUser() {
        return typeUser;
    }

    public void setTypeUser(int typeUser) {
        this.typeUser = typeUser;
    }

    public void setPassword(String password)
    {
        this.password = password;
    }

    
}
