package client;

import java.awt.Color;
import java.awt.Dimension;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;

public class Accueil extends JFrame implements ActionListener {
	
	private JButton ajout, liste,mod, sup, qt;
	private JLabel lnews, lnews_1, lnews_2;
	
	public Accueil() {
		JPanel pan1=new JPanel();
		pan1.setLayout(null);
		
		pan1.setBackground(new Color(41, 207, 201));
		
		
		JLabel message = new JLabel("Gerer les utilisateurs");
        message.setForeground(new Color(255, 255, 255));
        message.setFont(new Font("Capriola", Font.BOLD, 35));
        message.setBounds(390, 40, 300, 36);
        pan1.add(message);

		ajout = new JButton("Ajouter un utilisateur");
		ajout.setBounds(140, 150, 200, 100);
		ajout.setBackground(new Color(214, 170, 170, 255));
		ajout.addActionListener(this);
		pan1.add(ajout);
		
		qt = new JButton("QUITTER");
		qt.setBounds(440, 350, 100,50);
		qt.setBackground(new Color(202, 151, 151));
		qt.addActionListener(this);
		pan1.add(qt);
		
		liste = new JButton("Lister les utilisateurs");
		liste.setBounds(640, 150, 200,100);
		liste.setBackground(new Color(210, 161, 161));
		liste.addActionListener(this);
		pan1.add(liste);
		
		add(pan1);
		setTitle("Client TCP Swing Gestion DATACENTER");
		setSize(1000,500);
		setLocationRelativeTo(null);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		
		setUndecorated(true);
		
		setVisible(true);
	}
	
	public void actionPerformed(ActionEvent e) {
		
		if (e.getSource()==ajout)
		{
			dispose();
    		new AjoutUtilisateur();
		}else
			if (e.getSource()==liste)
			{ 
				dispose();
	    		new ListUtilisateur();
				
			}else
				if (e.getSource()==mod)
				{
					 
				}else
					if (e.getSource()==sup)
					{
						 
					}
				else
					if (e.getSource()==qt)
					{
						dispose();
						System.exit(0);
					    
					}
		
	}

	public static void main(String[] args) {
		
		new Accueil();

	}

}
