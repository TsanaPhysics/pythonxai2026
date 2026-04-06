import pygame
import sys

# 1. Initialize
pygame.init()
WIDTH, HEIGHT = 800, 600
screen = pygame.display.set_mode((WIDTH, HEIGHT))
pygame.display.set_caption("My Agri-Pygame App")

# Colors
WHITE = (255, 255, 255)
GREEN = (34, 139, 34)
BLACK = (0, 0, 0)

# Clock to control FPS
clock = pygame.time.Clock()
FPS = 60

# 2. Main Loop
def main():
    running = True
    while running:
        # A. Events
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                pygame.quit()
                sys.exit()

        # B. Update Logic
        # keys = pygame.key.get_pressed()
        # if keys[pygame.K_LEFT]: ...

        # C. Draw
        screen.fill(GREEN)  # Background color
        
        # Drawing a rectangle (x, y, width, height)
        # pygame.draw.rect(screen, BLACK, (100, 100, 50, 50))
        
        pygame.display.flip()  # Update screen
        clock.tick(FPS)        # Limit to 60 FPS

if __name__ == "__main__":
    main()
